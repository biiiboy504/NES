<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEducBackgroundsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('educ_backgrounds', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('students_id');
            $table->foreign('students_id')->references('id')->on('students');
            $table->string('elem_name')->nullable();
            $table->string('elem_date')->nullable();
            $table->string('hs_name')->nullable();
            $table->string('hs_date')->nullable();
            $table->string('voc_name')->nullable();
            $table->string('voc_date')->nullable();
            $table->string('college_name')->nullable();
            $table->string('college_date')->nullable();
            $table->string('course')->nullable();
            $table->string('units')->nullable();
            $table->string('post_grad')->nullable();
            $table->string('post_date')->nullable();
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
        Schema::dropIfExists('educ_backgrounds');
    }
}
