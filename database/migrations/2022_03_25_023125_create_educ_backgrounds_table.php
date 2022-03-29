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
            $table->string('elem_name');
            $table->string('highschool_name');
            $table->string('vocational_name');
            $table->string('collage_name');
            $table->integer('date_graduated');
            $table->string('course');
            $table->integer('num_units');
            $table->integer('post_grad');
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
