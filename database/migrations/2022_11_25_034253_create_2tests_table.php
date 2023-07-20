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
        Schema::create('2tests', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('f_id');
            $table->foreignId('gifting_reasons_id')->nullable()->constrained('gifting_reasons')->onUpdate('cascade') ->onDelete('cascade');

            //$table->foreign('f_id')->references('id')->on('1tests')->onUpdate('cascade') ->onDelete('cascade');;
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
        Schema::dropIfExists('2tests');
    }
};
