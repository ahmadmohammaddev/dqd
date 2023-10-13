<?php

namespace App\Http\Controllers\management_department;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\teacher_attendances;
use Illuminate\Support\Str;
use App\Models\students;
use App\Models\common_medicines;
use App\Models\chronic_diseases;
use App\Models\neighborhoods;
use App\Models\school_grades;
use App\Models\kinships;
use App\Models\educational_levels;
use App\Models\jobs;
use App\Models\relatives;
use App\Models\students_groups;
use App\Models\groups;
use App\Models\courses;
use App\Models\quran_recitations;
use App\Models\students_attendances;
use App\Models\students_relatives;
use App\Services\PayUService\Exception;
use Illuminate\Database\QueryException;

class management_students_controller extends Controller
{


    function post_student_attndance(Request $request)
    {

        try {
            $attendanceDate = $request->input('attendance_date');
            $studentIds = $request->input('attendance');

            foreach ($studentIds as $studentId) {
                students_attendances::create([
                    'students_id' => $studentId,
                    'date' => $attendanceDate,
                ]);
            }
            return redirect()->back()->with('success', 'Attendance recorded successfully.');
        } catch (QueryException $e) {
            $errorMessage = $e->getMessage();
            return redirect()->back()->with('error', "حصل خطأ يرجى مراجعة المطور !" . "\n" . $errorMessage);
        }
    }


    function show_groups()
    {
        $groups = groups::select('*')->get();

        // $students = students::join('students_groups', 'students.id', '=', 'students_groups.students_id')
        // ->whereIn('students_groups.groups_id', $groups->pluck('id')) // Filter by group IDs
        // ->get();

        return view('management.attendance.groups', compact('groups'));
    }

    function show_students($id)
    {
        $students = students_groups::join('students', 'students.id', '=', 'students_groups.students_id')
            ->where('students_groups.groups_id', $id)
            ->get();

        return view('management.attendance.students', compact('students'));
    }

    function main_home()
    {

        $students_info = students::select('*')->get();

        return view('management.students.main', compact('students_info'));
    }

    function student_profile($id)
    {
        $accepted_Cells = quran_recitations::where('students_id', '=', $id)
            ->count();
        $student_info = students::select('*')->where('id', '=', $id)->first();


        $group = groups::join('students_groups', 'groups.id', '=', 'students_groups.groups_id')
            ->join('students', 'students_groups.students_id', '=', 'students.id')
            ->where('students.id', '=', $id)
            ->select('groups.*')
            ->first();
        if ($group) {
            $course = courses::select('*')
                ->where('id', '=', $group->courses_id)
                ->first();
        } else $course = null;

        return view('management.students.profile', compact('accepted_Cells', 'student_info', 'group', 'course'));
    }

    function data_to_add_student()
    {
        $common_medicines = common_medicines::select('*')->get();
        $chronic_diseases = chronic_diseases::select('*')->get();
        $neighborhoods = neighborhoods::select('*')->get();
        $school_grades = school_grades::select('*')->get();


        return view('management.students.register', compact('neighborhoods', 'common_medicines', 'chronic_diseases', 'neighborhoods', 'school_grades'));
    }

    function data_to_add_parent(Request $request)
    {
        $kinships = kinships::select('*')->get();
        $neighborhoods = neighborhoods::select('*')->get();
        $educational_levels = educational_levels::select('*')->get();
        $jobs = jobs::select('*')->get();
        $student_name = students::select('student_fn', 'student_ln')->where('id', '=', $request->id)->first();
        $student_id = $request->id;
        return view('management.students.register_parent', compact('kinships', 'neighborhoods', 'educational_levels', 'jobs', 'student_name', 'student_id'));
    }

    function register_parent(Request $request)
    {

        $validatedData = $request->validate([
            'relative_fn' => 'required|string|max:255',
            'relative_ln' => 'required|string|max:255',
            'phone_number' => 'required|string|max:20',
            'kinship' => 'required|integer|exists:kinships,id',
            'marital_status' => 'required|string|in:1,0',
            'resident_address_id' => 'required|integer|exists:neighborhoods,id',
            'educational_levels_id' => 'required|integer|exists:educational_levels,id',
            'job_id' => 'required|integer|exists:jobs,id',
            'work_address_id' => 'nullable|integer|exists:neighborhoods,id',
            'work_phone_number' => 'nullable|string|max:20',
            'notes' => 'nullable|string|max:1000',
        ]);

        $relative = new relatives;
        $relative->relative_fn = $validatedData['relative_fn'];
        $relative->relative_ln = $validatedData['relative_ln'];
        $relative->phone_number = $validatedData['phone_number'];
        $relative->marital_status = $validatedData['marital_status'];
        $relative->resident_address_id = $validatedData['resident_address_id'];
        $relative->educational_levels_id = $validatedData['educational_levels_id'];
        $relative->job_id = $validatedData['job_id'];
        $relative->work_address_id = $validatedData['work_address_id'];
        $relative->work_phone_number = $validatedData['work_phone_number'];
        $relative->notes = $validatedData['notes'];


        $relative->save();

        $relativeid = relatives::select('id')
            ->where('relative_fn', '=', $validatedData['relative_fn'])
            ->where('relative_ln', '=', $validatedData['relative_ln'])
            ->where('phone_number', '=', $validatedData['phone_number'])
            ->get();

        $relative_id = $relativeid[0]->id;
        $student_relative = new students_relatives;
        $student_relative->students_id = $request->student_id;
        $student_relative->relative_id = $relative_id;
        $student_relative->kinships_id = $validatedData['kinship'];
        $student_relative->save();

        return redirect()->route('management.students.main')->with('success', 'تمت إضافة القريب بنجاح');
    }

    public function register_student(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'fn' => 'required|string|max:255',
            'ln' => 'required|string|max:255',
            'home_number' => 'nullable|string|max:255',
            'phone_number' => 'nullable|string|max:255',
            'qualified_phone_number' => 'required|string|max:255',
            'school_name' => 'nullable|string|max:255',
            'birth' => 'required|date',
            'school_grades_id' => 'required|integer',
            'is_mother_alive' => 'required|boolean',
            'is_father_alive' => 'required|boolean',
            'parent_marital_status' => 'required|boolean',
            'prohibited_medicines_id' => 'required|integer',
            'chronic_diseases_id' => 'required|integer',
            'home_address_id' => 'required|integer',
            'resident_address_id' => 'required|integer',
            'notes' => 'nullable|string',
        ]);

        // Create a new student instance
        $student = new students([
            'student_fn' => $validatedData['fn'],
            'student_ln' => $validatedData['ln'],
            'home_number' => $request->input('home_number'),
            'phone_number' => $request->input('phone_number'),
            'qualified_phone_number' => $validatedData['qualified_phone_number'],
            'school_name' => $request->input('school_name'),
            'birth' => $validatedData['birth'],
            'school_grades_id' => $validatedData['school_grades_id'],
            'is_mother_alive' => $validatedData['is_mother_alive'],
            'is_father_alive' => $validatedData['is_father_alive'],
            'parent_marital_status' => $validatedData['parent_marital_status'],
            'prohibited_medicines_id' => $validatedData['prohibited_medicines_id'],
            'chronic_diseases_id' => $validatedData['chronic_diseases_id'],
            'home_address_id' => $validatedData['home_address_id'],
            'resident_address_id' => $validatedData['resident_address_id'],
            'notes' => $validatedData['notes'],

        ]);

        // Save the student instance to the database
        $student->save();
        $full_name = $request->fn . ' ' . $request->ln;
        // Redirect the user back to the form with a success message
        return redirect()->route('management.students.main')->with('success', ' تم تسجيل الطالب' . ' ' . $full_name . '  ' . ' بنجاح')->with('full_name', $full_name);
    }

    function  show_student_main_info_to_edit($id)
    {
        $common_medicines = common_medicines::select('*')->get();
        $chronic_diseases = chronic_diseases::select('*')->get();
        $neighborhoods = neighborhoods::select('*')->get();
        $school_grades = school_grades::select('*')->get();


        $student_info = students::select(
            'students.*',
            'school_grades.school_grade as grade_name',
            'chronic_diseases.chronic_disease_name as chronic_disease_name',
            'common_medicines.medicine_name as prohibited_medicine_name',
            'home_address_table.neighborhood_name as home_address',
            'resident_address_table.neighborhood_name as resident_address'
        )

            ->join('school_grades', 'school_grades.id', '=', 'students.school_grades_id')
            ->join('chronic_diseases', 'chronic_diseases.id', '=', 'students.chronic_diseases_id')
            ->join('common_medicines', 'common_medicines.id', '=', 'students.prohibited_medicines_id')
            ->join('neighborhoods as home_address_table', 'home_address_table.id', '=', 'students.home_address_id')
            ->join('neighborhoods as resident_address_table', 'resident_address_table.id', '=', 'students.resident_address_id')

            ->where('students.id', '=', $id)
            ->get();

        //asdfsadf
        return view('management.students.profile', compact('student_info', 'common_medicines', 'chronic_diseases', 'neighborhoods', 'school_grades'));
    }

    function  edit_student_main_info(Request $request)
    {
        $student = students::find($request->id);

        $validatedData = $request->validate([
            'fn' => 'required|string|max:255',
            'ln' => 'required|string|max:255',
            'home_number' => 'nullable|string|max:255',
            'phone_number' => 'nullable|string|max:255',
            'qualified_phone_number' => 'required|string|max:255',
            'school_name' => 'nullable|string|max:255',
            'birth' => 'required|date',
            'school_grades_id' => 'required|integer',
            'is_mother_alive' => 'required|boolean',
            'is_father_alive' => 'required|boolean',
            'parent_marital_status' => 'required|boolean',
            'prohibited_medicines_id' => 'required|integer',
            'chronic_diseases_id' => 'required|integer',
            'home_address_id' => 'required|integer',
            'resident_address_id' => 'required|integer',
            'notes' => 'nullable|string',
        ]);

        $student->student_fn = $validatedData['fn'];
        $student->student_ln = $validatedData['ln'];
        $student->home_number = $request->input('home_number');
        $student->phone_number = $request->input('phone_number');
        $student->qualified_phone_number = $validatedData['qualified_phone_number'];
        $student->school_name = $request->input('school_name');
        $student->birth = $validatedData['birth'];
        $student->school_grades_id = $validatedData['school_grades_id'];
        $student->is_mother_alive = $validatedData['is_mother_alive'];
        $student->is_father_alive = $validatedData['is_father_alive'];
        $student->parent_marital_status = $validatedData['parent_marital_status'];
        $student->prohibited_medicines_id = $validatedData['prohibited_medicines_id'];
        $student->chronic_diseases_id = $validatedData['chronic_diseases_id'];
        $student->home_address_id = $validatedData['home_address_id'];
        $student->resident_address_id = $validatedData['resident_address_id'];
        $student->notes = $validatedData['notes'];
        if ($student->save()) {
            return redirect()->route('management.students.main');
        } else {
            // The save operation failed
            return "Failed to save student.";
        }
    }


    function  student_relative_info_selector($student_id)
    {

        $relatives = students_relatives::select('relatives.*')
            ->join('relatives', 'relatives.id', '=', 'students_relatives.relative_id')
            ->where('students_relatives.students_id', '=', $student_id)->get();
        $relative_count = count($relatives);
        return view('management.students.relative_selector', compact('relatives', 'relative_count', 'student_id'));
    }




    function show_relative_main_info_to_edit($relative_id, $student_id)
    {

        $neighborhoods = neighborhoods::select('*')->get();
        $jobs = jobs::select('*')->get();
        $educational_levels = educational_levels::select('*')->get();
        $kinships = kinships::select('*')->get();



        $relative_info = relatives::select(
            'relatives.*',
            'work_address_table.neighborhood_name as work_address_name',
            'resident_address_table.neighborhood_name as resident_address',
            'educational_levels.educational_level',
            'jobs.job_type as job_name'
        )
            ->join('neighborhoods as work_address_table', 'work_address_table.id', '=', 'relatives.work_address_id')
            ->join('neighborhoods as resident_address_table', 'resident_address_table.id', '=', 'relatives.resident_address_id')
            ->join('educational_levels', 'educational_levels.id', '=', 'relatives.educational_levels_id')
            ->join('jobs', 'jobs.id', '=', 'relatives.job_id')

            ->where('relatives.id', '=', $relative_id)->get();
        $relative_info = $relative_info[0];

        $kinship_info = students_relatives::select(
            'students_relatives.*',
            'kinships.kinship_type',
            'kinships.id'
        )
            ->join('kinships', 'kinships.id', '=', 'students_relatives.kinships_id')
            ->where('students_relatives.students_id', '=', $student_id)
            ->where('students_relatives.relative_id', '=', $relative_id)
            ->get();


        //return $relative_info->resident_address;
        return view(
            'management.students.relative_info',
            compact('jobs', 'educational_levels', 'kinships', 'neighborhoods', 'relative_info', 'kinship_info', 'student_id')
        );
    }

    function edit_student_relative_info(Request $request)
    {

        $relative = relatives::find($request->relative_id);

        $validatedData = $request->validate([
            'relative_fn' => 'required|string|max:255',
            'relative_ln' => 'required|string|max:255',
            'phone_number' => 'required|string|max:20',
            'kinship' => 'required|integer|exists:kinships,id',
            'marital_status' => 'required|string|in:1,0',
            'resident_address_id' => 'required|integer|exists:neighborhoods,id',
            'educational_levels_id' => 'required|integer|exists:educational_levels,id',
            'job_id' => 'required|integer|exists:jobs,id',
            'work_address_id' => 'nullable|integer|exists:neighborhoods,id',
            'work_phone_number' => 'nullable|string|max:20',
            'notes' => 'nullable|string|max:1000',
        ]);


        $relative->relative_fn = $validatedData['relative_fn'];
        $relative->relative_ln = $validatedData['relative_ln'];
        $relative->phone_number = $validatedData['phone_number'];
        $relative->marital_status = $validatedData['marital_status'];
        $relative->resident_address_id = $validatedData['resident_address_id'];
        $relative->educational_levels_id = $validatedData['educational_levels_id'];
        $relative->job_id = $validatedData['job_id'];
        $relative->work_address_id = $validatedData['work_address_id'];
        $relative->work_phone_number = $validatedData['work_phone_number'];
        $relative->notes = $validatedData['notes'];


        if ($relative->save()) {
            return "cannot update kinships";
            $relativeid = relatives::select('id')
                ->where('relative_fn', '=', $validatedData['relative_fn'])
                ->where('relative_ln', '=', $validatedData['relative_ln'])
                ->where('phone_number', '=', $validatedData['phone_number'])
                ->get();

            $relative_id = $relativeid[0]->id;

            $students_id = $request->student_id;
            $relative_id = $relative_id;
            $student_relative = students_relatives::find([$students_id, $relative_id]);

            $student_relative->students_id = $request->student_id;
            $student_relative->relative_id = $relative_id;
            $student_relative->kinships_id = $validatedData['kinship'];

            return redirect()->route('management.students.main')->with('success', 'تمت إضافة القريب بنجاح');
        } else {
            // The save operation failed
            return "Failed to save student.";
        }
    }


    function  test()
    {
        return "hi";
    }
    function  post_test()
    {
        return "hi";
    }


    function post_attendance(Request $request)
    {
        $arr = $request->all();
        return Str::length($arr);
        /*
dd($request->all());
        $products = $request->all();
foreach($products as $product){
   $product->name;
}
*/
        /*return $request;
        $al = $request->get('name');
        return $al;*/
        //array of objects
        //return $request[1]['name'];
        foreach ($request as $apple) {
            echo $apple->name;
        }
        // return $request[0]['name'];

        /*
        $res = teacher_attendances::create([
            'students_id' => $request->student_name_selector,
            'receiver_id' => $request->reciever_name_selector,
            'surah' => $request->surah_name_selector,
            'page' => $request->page_number_selector,
            'recitations_evaluations_id' => $request->evaluation_selector,
            'recitation_date' => $request->recitting_date,
        ]);
        if ($res)
            return "Done";
        else  return "Failed";*/
    }
}
