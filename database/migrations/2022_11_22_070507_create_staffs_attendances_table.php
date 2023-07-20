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
        Schema::create('staffs_attendances', function (Blueprint $table) {
            $table->id();
            $table->foreignId('staffs_id')->constrained('staffs')->onUpdate('cascade') ->onDelete('cascade');

            $table->date('date');
            $table->time('arrival_time')->nullable();

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
        Schema::dropIfExists('staffs_attendances');
    }
};
