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
        Schema::create('groups_books', function (Blueprint $table) {
            $table->id();
            $table->foreignId('educational_books_id')->constrained('educational_books')->onUpdate('cascade') ->onDelete('cascade');
            $table->foreignId('groups_id')->constrained('groups')->onUpdate('cascade') ->onDelete('cascade');

            $table ->unique(['educational_books_id','groups_id']);


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
        Schema::dropIfExists('groups_books');
    }
};
