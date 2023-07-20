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
        Schema::create('students_scores', function (Blueprint $table) {
            $table->id();
            $table->foreignId('students_id')->constrained('students')->onUpdate('cascade') ->onDelete('cascade');
            $table->foreignId('gifting_reasons_id')->nullable()->constrained('gifting_reasons')->onUpdate('cascade') ->onDelete('cascade');


            $table->integer('added_score');
            $table->date('given_date');

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
        Schema::dropIfExists('students_scores');
    }
};
