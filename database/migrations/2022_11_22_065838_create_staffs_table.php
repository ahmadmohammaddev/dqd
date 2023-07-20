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
        Schema::create('staffs', function (Blueprint $table) {
            $table->id();
            $table->string('staff_fn');
            $table->string('staff_ln');

            $table->string('home_number')->nullable();
            $table->string('phone_number');
            $table->string('work_phone_number')->nullable();
            $table->text('notes')->nullable();
            $table->date('birth');
            $table->boolean('is_mother_alive')->default(true);
            $table->boolean('is_father_alive')->default(true);
            $table->boolean('marital_status')->default(false);

            $table->foreignId('chronic_diseases_id')->constrained('chronic_diseases')->onUpdate('cascade') ->onDelete('cascade');
            $table->foreignId('home_address_id')->constrained('neighborhoods')->onUpdate('cascade') ->onDelete('cascade');
            $table->foreignId('resident_address_id')->constrained('neighborhoods')->onUpdate('cascade') ->onDelete('cascade');
            $table->foreignId('work_address_id')->constrained('neighborhoods')->onUpdate('cascade') ->onDelete('cascade');
            $table->foreignId('educational_levels_id')->constrained('educational_levels')->onUpdate('cascade') ->onDelete('cascade');
            $table->foreignId('job_id')->constrained('jobs')->onUpdate('cascade') ->onDelete('cascade');

            $table ->unique(['staff_fn','staff_ln','birth']);
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
        Schema::dropIfExists('staffs');
    }
};
