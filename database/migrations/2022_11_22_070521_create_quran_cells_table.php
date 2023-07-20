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
        Schema::create('quran_cells', function (Blueprint $table) {
            $table->id();
            $table->foreignId('surahs_id')->constrained('surahs')->onUpdate('cascade') ->onDelete('cascade');
            $table->foreignId('pages_id')->constrained('quran_pages')->onUpdate('cascade') ->onDelete('cascade');

            $table ->unique(['surahs_id','pages_id']);
            $table->timestamps();
            //  THERE ARE NO NEED FOR THIS TABLE
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('quran_cells');
    }
};
