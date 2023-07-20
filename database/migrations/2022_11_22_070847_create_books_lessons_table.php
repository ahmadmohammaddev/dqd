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
        Schema::create('books_lessons', function (Blueprint $table) {
            $table->id();
            $table->foreignId('educational_books_id')->constrained('educational_books')->onUpdate('cascade') ->onDelete('cascade');
            $table->integer('lesson_number');
            $table->string('lesson_title');

            $table ->unique(['educational_books_id','lesson_title']);

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
        Schema::dropIfExists('books_lessons');
    }
};
