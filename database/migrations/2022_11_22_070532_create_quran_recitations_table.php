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
        Schema::create('quran_recitations', function (Blueprint $table) {
            $table->id();

            $table->foreignId('students_id')->constrained('students')->onUpdate('cascade') ->onDelete('cascade');
            $table->foreignId('receiver_id')->constrained('staffs')->onUpdate('cascade') ->onDelete('cascade');

            $table->foreignId('surah')->constrained('surahs')->onUpdate('cascade') ->onDelete('cascade');
            $table->foreignId('page')->constrained('quran_pages')->onUpdate('cascade') ->onDelete('cascade');

            $table->foreignId('recitations_evaluations_id')->constrained('recitations_evaluations')->onUpdate('cascade') ->onDelete('cascade');

            $table->boolean('in_our_mosque')->default(true);
            $table->boolean('is_new')->default(true); //the cell recited again or its first time

            $table->date('recitation_date');
            $table ->unique(['students_id','surah','page','is_new']);

//surahs_id & pages_id have been deited in order not to get error for long unique feature
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
        Schema::dropIfExists('quran_recitations');
    }
};
