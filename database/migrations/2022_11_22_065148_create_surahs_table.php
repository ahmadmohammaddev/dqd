<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surahs', function (Blueprint $table) {
            $table->id();
            $table->string('surah_name')->unique();

            $table->foreignId('start_from_page')->constrained('quran_pages')->onUpdate('cascade') ->onDelete('cascade');;
            $table->float('surahs_start_proportion_to_entire_page');
            $table->foreignId('end_in_page')->constrained('quran_pages')->onUpdate('cascade') ->onDelete('cascade');;
            $table->float('surahs_end_proportion_to_entire_page');
            $table->float('surahs_proportion_to_entire_quran');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('surahs');
    }
};
