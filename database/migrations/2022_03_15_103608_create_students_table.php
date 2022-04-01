<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('middle_name');
            $table->string('last_name');
            $table->string('address');
            $table->integer('zip_code');
            $table->integer('contact_num');
            $table->integer('landline');
            $table->integer('civil_status');
            $table->string('gender');
            $table->integer('height');
            $table->integer('weight');
            $table->string('citizenship');
            $table->string('birth_place');
            $table->integer('birth_date'); 
            $table->integer('age');
            $table->integer('batch_num');
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
        Schema::dropIfExists('students');
    }
}
