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
        Schema::create('staffs_qualifications', function (Blueprint $table) {
            $table->id();
            $table->foreignId('staffs_id')->constrained('staffs')->onUpdate('cascade') ->onDelete('cascade');
            $table->foreignId('qualifications_id')->constrained('qualifications')->onUpdate('cascade') ->onDelete('cascade');


            $table ->unique(['staffs_id','qualifications_id']);


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
        Schema::dropIfExists('staffs_qualifications');
    }
};
