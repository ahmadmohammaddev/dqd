<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourseDeservedPointsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_deserved_points', function (Blueprint $table) {
            $table->id();

            $table->foreignId('pivotal_points_credits_id')->constrained('pivotal_points_credits')->onUpdate('cascade') ->onDelete('cascade');
            $table->foreignId('courses_id')->constrained('courses')->onUpdate('cascade') ->onDelete('cascade');

            $table->timestamps();
            $table ->unique(['pivotal_points_credits_id','courses_id'],' unique_deserved_points');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('course_deserved_points');
    }
}
