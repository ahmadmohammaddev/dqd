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
        Schema::create('given_equipments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('students_id')->constrained('students')->onUpdate('cascade') ->onDelete('cascade');
            $table->foreignId('equipments_id')->constrained('equipments')->onUpdate('cascade') ->onDelete('cascade');

            $table->date('given_date');

            $table ->unique(['students_id','equipments_id','given_date']);

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
        Schema::dropIfExists('given_equipments');
    }
};
