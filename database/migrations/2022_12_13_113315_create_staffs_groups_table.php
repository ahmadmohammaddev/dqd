<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStaffsGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staffs_groups', function (Blueprint $table) {
            $table->id();

            $table->foreignId('staffs_id')->constrained('staffs')->onUpdate('cascade') ->onDelete('cascade');
            $table->foreignId('groups_id')->constrained('groups')->onUpdate('cascade') ->onDelete('cascade');

            $table ->unique(['staffs_id','groups_id']);

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
        Schema::dropIfExists('staffs_groups');
    }
}
