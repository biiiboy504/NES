<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOtherWorkExperiencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('other_work_experiences', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('students_id');
            $table->foreign('students_id')->references('id')->on('students')->onDelete('cascade');
            $table->string('other_work_experience')->nullable();
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
        Schema::dropIfExists('other_work_experiences');
    }
}
