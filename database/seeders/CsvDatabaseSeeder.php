<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\LazyCollection;
use Illuminate\Support\Str;
use Carbon\Carbon;

class CsvDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $csvDirectory = storage_path('app/csv');

        if (!is_dir($csvDirectory)) {
            $this->command->error("CSV directory not found: {$csvDirectory}");
            return;
        }

        $csvFiles = glob($csvDirectory . '/*.csv');
        if (empty($csvFiles)) {
            $this->command->warn("No CSV files found in {$csvDirectory}");
            return;
        }

        $this->command->info("Found " . count($csvFiles) . " CSV file(s). Sorting dependencies...");

        $orderedFiles = $this->getOrderedFiles($csvFiles);

        $this->command->info("Execution sequence determined. Seeding database tables...");

        Schema::disableForeignKeyConstraints();

        try {
            foreach ($orderedFiles as $filePath) {
                $this->seedCsvFile($filePath);
            }
        } finally {
            Schema::enableForeignKeyConstraints();
        }

        $this->command->info("Database seeding completed successfully!");
    }

    /**
     * Seeds a single CSV file.
     *
     * @param string $filePath
     * @return void
     */
    protected function seedCsvFile(string $filePath)
    {
        $filename = pathinfo($filePath, PATHINFO_FILENAME);
        $tableName = $this->resolveTableName($filename);

        if (!Schema::hasTable($tableName)) {
            $this->command->warn("Skipping file: '{$filename}.csv' (Table '{$tableName}' does not exist in the database)");
            return;
        }

        $this->command->info("Seeding table '{$tableName}' from file: '{$filename}.csv'...");

        $columns = Schema::getColumnListing($tableName);
        $uniqueKeys = $this->getUniqueKeys($tableName);
        
        $chunkSize = 250;
        
        // Track the data row index (1-based count of valid, non-header, non-duplicate rows processed)
        $dataRowIndex = 1;
        
        // Track seen row hashes to prevent inserting duplicates from the CSV in the same run
        $seenHashes = [];

        $lazyRows = LazyCollection::make(function () use ($filePath) {
            $handle = fopen($filePath, 'r');
            if ($handle === false) {
                throw new \Exception("Unable to open CSV file: {$filePath}");
            }
            try {
                // Read and skip BOM if present
                $bom = fread($handle, 3);
                if ($bom !== "\xEF\xBB\xBF") {
                    rewind($handle);
                }
                
                while (($row = fgetcsv($handle)) !== false) {
                    yield $row;
                }
            } finally {
                fclose($handle);
            }
        });

        $lazyRows->chunk($chunkSize)->each(function ($chunk) use ($tableName, $columns, $uniqueKeys, &$dataRowIndex, &$seenHashes) {
            DB::transaction(function () use ($chunk, $tableName, $columns, $uniqueKeys, &$dataRowIndex, &$seenHashes) {
                $now = now();
                foreach ($chunk as $row) {
                    // Skip empty rows (including rows containing only commas/empty cells)
                    $isRowEmpty = true;
                    foreach ($row as $cell) {
                        if ($cell !== null && trim($cell) !== '' && trim($cell) !== 'NULL' && trim($cell) !== 'null') {
                            $isRowEmpty = false;
                            break;
                        }
                    }

                    if ($isRowEmpty) {
                        continue;
                    }

                    // Skip header row
                    if ($this->isHeaderRow($tableName, $row, $columns)) {
                        continue;
                    }

                    $rowValues = [];
                    foreach ($columns as $colIndex => $columnName) {
                        // Get the value from the CSV row at the corresponding index
                        $val = $row[$colIndex] ?? null;

                        // Normalize string NULLs and empty strings to null values
                        if ($val === 'NULL' || $val === 'null' || trim($val) === '') {
                            $val = null;
                        }

                        // Set default timestamps if they are empty
                        if ($columnName === 'created_at') {
                            $rowValues[$columnName] = $val ?? $now;
                        } elseif ($columnName === 'updated_at') {
                            $rowValues[$columnName] = $val ?? $now;
                        } else {
                            if ($val !== null) {
                                try {
                                    $type = Schema::getColumnType($tableName, $columnName);
                                    if (in_array($type, ['date', 'datetime', 'timestamp'])) {
                                        $val = $this->normalizeDate($val, $type);
                                    }
                                } catch (\Throwable $e) {
                                    // Ignore if type check fails
                                }
                            }
                            $rowValues[$columnName] = $val;
                        }
                    }

                    // Compute unique row hash to deduplicate within the same run
                    if (!empty($uniqueKeys)) {
                        $hashValues = [];
                        foreach ($uniqueKeys as $field) {
                            $hashValues[] = $rowValues[$field] ?? '';
                        }
                        $rowHash = md5(implode('|', $hashValues));
                    } else {
                        // Fallback: hash all fields except id, created_at, updated_at
                        $hashValues = [];
                        foreach ($rowValues as $k => $v) {
                            if ($k !== 'id' && $k !== 'created_at' && $k !== 'updated_at') {
                                $hashValues[] = $v ?? '';
                            }
                        }
                        $rowHash = md5(implode('|', $hashValues));
                    }

                    if (isset($seenHashes[$rowHash])) {
                        // Skip duplicate row
                        continue;
                    }
                    $seenHashes[$rowHash] = true;

                    // Check if table contains ID column and assign 1-based index if ID in CSV is NULL
                    if (in_array('id', $columns)) {
                        $id = $rowValues['id'] ?? null;
                        if (is_null($id)) {
                            $id = $dataRowIndex;
                            $rowValues['id'] = $id;
                        }

                        DB::table($tableName)->updateOrInsert(
                            ['id' => $id],
                            $rowValues
                        );
                    } else {
                        // Without an 'id' column, we match using all the mapped values
                        DB::table($tableName)->updateOrInsert(
                            $rowValues,
                            $rowValues
                        );
                    }

                    $dataRowIndex++;
                }
            });
        });

        $this->command->info("Table '{$tableName}' seeded: " . ($dataRowIndex - 1) . " rows processed.");
    }

    /**
     * Dynamically retrieve unique keys for a table from the database, falling back to a hardcoded map.
     *
     * @param string $tableName
     * @return array
     */
    protected function getUniqueKeys(string $tableName): array
    {
        try {
            $database = DB::connection()->getDatabaseName();
            
            $results = DB::select("
                SELECT INDEX_NAME, COLUMN_NAME 
                FROM INFORMATION_SCHEMA.STATISTICS 
                WHERE TABLE_SCHEMA = ? 
                  AND TABLE_NAME = ? 
                  AND NON_UNIQUE = 0 
                  AND INDEX_NAME != 'PRIMARY'
                ORDER BY INDEX_NAME, SEQ_IN_INDEX
            ", [$database, $tableName]);
            
            $indexes = [];
            foreach ($results as $row) {
                $indexes[$row->INDEX_NAME][] = $row->COLUMN_NAME;
            }
            
            if (!empty($indexes)) {
                // Return the first unique index found (usually the logical unique constraint)
                return reset($indexes);
            }
        } catch (\Throwable $e) {
            // Ignore database query exceptions and use fallback
        }

        // Hardcoded unique keys map as fallback
        $uniqueKeysMap = [
            'book_types' => ['book_type'],
            'chronic_diseases' => ['chronic_disease_name'],
            'common_medicines' => ['medicine_name'],
            'educational_levels' => ['educational_level'],
            'equipments' => ['equipment_name'],
            'gifting_reasons' => ['gifting_reason'],
            'jobs' => ['job_type'],
            'kinships' => ['kinship_name'],
            'provinces' => ['province_name'],
            'qualifications' => ['qualification_name'],
            'recitations_evaluations' => ['recitations_evaluation_name'],
            'relatives' => ['relative_fn', 'relative_ln', 'phone_number'],
            'school_grades' => ['school_grade'],
            'students' => ['student_fn', 'student_ln', 'birth'],
            'staffs' => ['staff_fn', 'staff_ln', 'birth'],
            'neighborhoods' => ['neighborhood_name', 'provinces_id'],
            'surahs' => ['surah_name'],
            'system_departments' => ['department_name'],
            'students_groups' => ['students_id', 'groups_id'],
            'students_relatives' => ['students_id', 'relative_id', 'kinships_id'],
            'staffs_groups' => ['staffs_id', 'groups_id'],
            'staffs_positions' => ['staffs_id', 'courses_id', 'positions_id'],
            'staffs_qualifications' => ['staffs_id', 'qualifications_id'],
            'educational_books' => ['book_title'],
            'books_lessons' => ['educational_books_id', 'lesson_title'],
            'groups_books' => ['educational_books_id', 'groups_id'],
            'given_lessons' => ['groups_id', 'books_lessons_id', 'date'],
            'quran_recitations' => ['students_id', 'receiver_id', 'surah', 'page', 'recitations_evaluations_id'],
            'quran_cells' => ['surahs_id', 'pages_id'],
        ];

        return $uniqueKeysMap[$tableName] ?? [];
    }

    /**
     * Normalize date string to MySQL format (Y-m-d or Y-m-d H:i:s).
     *
     * @param string $val
     * @param string $columnType
     * @return string
     */
    protected function normalizeDate(string $val, string $columnType): string
    {
        $val = trim($val);
        
        // Handle slashes commonly used in formats like M/D/YYYY
        if (strpos($val, '/') !== false) {
            try {
                $date = Carbon::createFromFormat('n/j/Y', $val);
                return $columnType === 'date' ? $date->toDateString() : $date->toDateTimeString();
            } catch (\Throwable $e) {
                // Fallback to standard Carbon parse
                try {
                    $date = Carbon::parse($val);
                    return $columnType === 'date' ? $date->toDateString() : $date->toDateTimeString();
                } catch (\Throwable $ex) {
                    return $val;
                }
            }
        }

        try {
            $date = Carbon::parse($val);
            return $columnType === 'date' ? $date->toDateString() : $date->toDateTimeString();
        } catch (\Throwable $e) {
            return $val;
        }
    }

    /**
     * Checks if a CSV row is a header row.
     *
     * @param string $tableName
     * @param array $row
     * @param array $columns
     * @return bool
     */
    protected function isHeaderRow(string $tableName, array $row, array $columns): bool
    {
        foreach ($columns as $colIndex => $columnName) {
            $val = $row[$colIndex] ?? null;
            if ($val === null || $val === '' || $val === 'NULL' || $val === 'null') {
                continue;
            }
            
            // If the database column is numeric, but the CSV value is not numeric
            try {
                $type = Schema::getColumnType($tableName, $columnName);
                $isNumericType = Str::contains($type, ['int', 'float', 'double', 'decimal', 'numeric']);
                
                if ($isNumericType && !is_numeric($val)) {
                    return true;
                }
            } catch (\Throwable $e) {
                // Ignore if getColumnType fails
            }
        }
        
        // Fallback: if the first column is named 'id' and the value is literally 'id' or 'ID'
        if (isset($columns[0]) && $columns[0] === 'id' && isset($row[0])) {
            $firstVal = trim(strtolower($row[0]));
            if ($firstVal === 'id') {
                return true;
            }
        }
        
        return false;
    }

    /**
     * Resolves the table name from the CSV filename.
     *
     * @param string $filename
     * @return string
     */
    protected function resolveTableName(string $filename): string
    {
        $name = strtolower($filename);

        // Remove numeric prefix if present (e.g. "01_roles" -> "roles")
        if (preg_match('/^\d+[_-]+(.*)$/', $name, $matches)) {
            $name = $matches[1];
        }

        $tableNameMap = [
            'juzzaas' => 'juzaas',
            'neighborhood' => 'neighborhoods',
        ];

        if (isset($tableNameMap[$name])) {
            return $tableNameMap[$name];
        }

        // If it already matches a table name in the DB, keep it
        if (Schema::hasTable($name)) {
            return $name;
        }

        // Try standard pluralization
        $pluralName = Str::plural($name);
        if (Schema::hasTable($pluralName)) {
            return $pluralName;
        }

        return $name;
    }

    /**
     * Orders the files topologically based on hardcoded table dependencies,
     * or by inspecting their filenames for numerical prefixes.
     *
     * @param array $csvFiles
     * @return array
     */
    protected function getOrderedFiles(array $csvFiles): array
    {
        // Check if files contain numeric prefixes (e.g., '01_roles.csv', '02_users.csv')
        $hasNumericPrefixes = false;
        foreach ($csvFiles as $filePath) {
            $filename = pathinfo($filePath, PATHINFO_FILENAME);
            if (preg_match('/^\d+[_-]/', $filename)) {
                $hasNumericPrefixes = true;
                break;
            }
        }

        // If numeric prefixes exist, sort alphabetically/numerically by filename
        if ($hasNumericPrefixes) {
            sort($csvFiles, SORT_NATURAL);
            return $csvFiles;
        }

        // Hardcoded dependency map (parent tables that must be seeded first)
        $dependencies = [
            'neighborhoods' => ['provinces'],
            'surahs' => ['quran_pages'],
            'educational_books' => ['book_types'],
            'books_lessons' => ['educational_books'],
            'groups_books' => ['educational_books', 'groups'],
            'given_lessons' => ['groups', 'books_lessons'],
            'quran_recitations' => ['students', 'staffs', 'surahs', 'quran_pages', 'recitations_evaluations'],
            'quran_cells' => ['surahs', 'quran_pages'],
            'staffs_attendances' => ['staffs'],
            'students_attendances' => ['students'],
            'students_groups' => ['students', 'groups'],
            'groups' => ['courses'],
            'staffs_positions' => ['staffs', 'courses', 'positions'],
            'staffs_qualifications' => ['staffs', 'qualifications'],
            'students_scores' => ['students', 'gifting_reasons'],
            'given_equipments' => ['students', 'equipments'],
            'users' => ['students', 'staffs'],
            'staffs' => ['chronic_diseases', 'neighborhoods', 'educational_levels', 'jobs'],
            'students' => ['school_grades', 'common_medicines', 'chronic_diseases', 'neighborhoods'],
            'relatives' => ['neighborhoods', 'educational_levels', 'jobs'],
            'students_relatives' => ['students', 'relatives', 'kinships'],
            'staffs_groups' => ['staffs', 'groups'],
            'students_points_balances' => ['students'],
            'students_duties' => ['students', 'weeks_days', 'students_duties_variations'],
            'course_deserved_points' => ['pivotal_points_credits', 'courses'],
        ];

        // Map table name to CSV file path
        $tableToFilePath = [];
        foreach ($csvFiles as $filePath) {
            $filename = pathinfo($filePath, PATHINFO_FILENAME);
            $tableName = $this->resolveTableName($filename);
            $tableToFilePath[$tableName] = $filePath;
        }

        $sorted = [];
        $visited = [];

        $visit = function ($table) use (&$visit, &$visited, &$sorted, $dependencies, $tableToFilePath) {
            if (isset($visited[$table])) {
                if ($visited[$table] === 'visiting') {
                    // Avoid circular dependency infinite loops
                    return;
                }
                return;
            }

            $visited[$table] = 'visiting';

            // Seed parents/dependencies first
            $deps = $dependencies[$table] ?? [];
            foreach ($deps as $dep) {
                if (isset($tableToFilePath[$dep])) {
                    $visit($dep);
                }
            }

            $visited[$table] = 'visited';
            $sorted[] = $table;
        };

        // Run topological sorting on all tables that have a CSV file
        foreach (array_keys($tableToFilePath) as $table) {
            $visit($table);
        }

        // Map back to full file paths
        $orderedFiles = [];
        foreach ($sorted as $table) {
            if (isset($tableToFilePath[$table])) {
                $orderedFiles[] = $tableToFilePath[$table];
            }
        }

        return $orderedFiles;
    }
}
