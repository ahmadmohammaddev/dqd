<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsDutiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students_duties', function (Blueprint $table) {
            $table->id();
            $table->foreignId('students_id')->constrained('students')->onUpdate('cascade') ->onDelete('cascade');
            $table->foreignId('weeks_days_id')->constrained('weeks_days')->onUpdate('cascade') ->onDelete('cascade');
            $table->json('duties');
            $table->foreignId('students_duties_variations_id')->constrained('students_duties_variations')->onUpdate('cascade') ->onDelete('cascade');
            $table->boolean('duty_status')->default(0);
            $table->date('doning_date');
            $table->timestamps();

            $table ->unique(['students_id','doning_date','duties']);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students_duties');
    }
}
