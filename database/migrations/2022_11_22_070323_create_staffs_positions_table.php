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
        Schema::create('staffs_positions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('staffs_id')->constrained('staffs')->onUpdate('cascade') ->onDelete('cascade');
            $table->foreignId('courses_id')->constrained('courses')->onUpdate('cascade') ->onDelete('cascade');
            $table->foreignId('positions_id')->constrained('positions')->onUpdate('cascade') ->onDelete('cascade');

            $table->date('start_date');
            $table->date('end_date')->nullable();
            $table ->unique(['staffs_id','courses_id','positions_id']);


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
        Schema::dropIfExists('staffs_positions');
    }
};
