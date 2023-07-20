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
        Schema::create('students_groups', function (Blueprint $table) {
            $table->id();
            $table->foreignId('students_id')->constrained('students')->onUpdate('cascade') ->onDelete('cascade');
            $table->foreignId('groups_id')->constrained('groups')->onUpdate('cascade') ->onDelete('cascade');

            $table->integer('score')->default(0);
            $table->date('registeration_date');

            $table ->unique(['students_id','groups_id']);

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
        Schema::dropIfExists('students_groups');
    }
};
