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
        Schema::create('relatives', function (Blueprint $table) {
            $table->id();

            $table->string('relative_fn');
            $table->string('relative_ln');

            $table->string('phone_number');
            $table->string('work_phone_number')->nullable();
           $table->text('notes')->nullable();
           $table->boolean('marital_status')->default(false);

            $table->foreignId('resident_address_id')->constrained('neighborhoods')->onUpdate('cascade') ->onDelete('cascade');
            $table->foreignId('work_address_id')->nullable()->constrained('neighborhoods')->onUpdate('cascade') ->onDelete('cascade');
            $table->foreignId('educational_levels_id')->constrained('educational_levels')->onUpdate('cascade') ->onDelete('cascade');
            $table->foreignId('job_id')->constrained('jobs')->onUpdate('cascade') ->onDelete('cascade');


           $table ->unique(['relative_fn','relative_ln','phone_number']);

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
        Schema::dropIfExists('relatives');
    }
};
