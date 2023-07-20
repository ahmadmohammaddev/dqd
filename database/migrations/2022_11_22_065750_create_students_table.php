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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('student_fn');
            $table->string('student_ln');

            $table->string('school_name')->nullable();
            $table->string('home_number')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('qualified_phone_number');

            $table->text('notes')->nullable();
            $table->date('birth');

            $table->boolean('is_mother_alive')->default(true);
            $table->boolean('is_father_alive')->default(true);
            $table->boolean('parent_marital_status')->default(true);


            $table->foreignId('school_grades_id')->constrained('school_grades')->onUpdate('cascade') ->onDelete('cascade');
            $table->foreignId('prohibited_medicines_id')->constrained('common_medicines')->onUpdate('cascade') ->onDelete('cascade');
            $table->foreignId('chronic_diseases_id')->constrained('chronic_diseases')->onUpdate('cascade') ->onDelete('cascade');
            $table->foreignId('home_address_id')->constrained('neighborhoods')->onUpdate('cascade') ->onDelete('cascade');
            $table->foreignId('resident_address_id')->constrained('neighborhoods')->onUpdate('cascade') ->onDelete('cascade');

            $table ->unique(['student_fn','student_ln','birth']);
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
        Schema::dropIfExists('students');
    }
};
