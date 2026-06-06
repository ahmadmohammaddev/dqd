<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('username');
            $table->string('password');
            $table->integer('user_type');//staff,studetn or family member (0 for staff, 1 for student)

            $table->foreignId('students_id')->nullable()->constrained('students')->onUpdate('cascade') ->onDelete('cascade');
            $table->foreignId('staffs_id')->nullable()->constrained('staffs')->onUpdate('cascade') ->onDelete('cascade');

            $table ->unique(['students_id','user_type']);
            $table ->unique(['staffs_id','user_type']);


            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
