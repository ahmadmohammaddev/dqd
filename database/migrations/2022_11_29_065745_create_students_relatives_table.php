<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsRelativesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students_relatives', function (Blueprint $table) {
            $table->id();

            $table->foreignId('students_id')->constrained('students')->onUpdate('cascade') ->onDelete('cascade');
            $table->foreignId('relative_id')->constrained('relatives')->onUpdate('cascade') ->onDelete('cascade');
            $table->foreignId('kinships_id')->constrained('kinships')->onUpdate('cascade') ->onDelete('cascade');

            $table ->unique(['students_id','relative_id','kinships_id']);

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
        Schema::dropIfExists('students_relatives');
    }
}
