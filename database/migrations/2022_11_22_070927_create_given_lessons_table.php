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
        Schema::create('given_lessons', function (Blueprint $table) {
            $table->id();

            $table->foreignId('groups_id')->constrained('groups')->onUpdate('cascade') ->onDelete('cascade');
            $table->foreignId('books_lessons_id')->constrained('books_lessons')->onUpdate('cascade') ->onDelete('cascade');

            $table->boolean('lesson_status')->default(1);
            $table->date('date');

            $table ->unique(['groups_id','books_lessons_id','date']);

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
        Schema::dropIfExists('given_lessons');
    }
};
