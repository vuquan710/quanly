<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class StudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Stt')->nullable();
            $table->string('Name')->nullable();
            $table->string('Parent')->nullable();
            $table->string('Course')->nullable();
            $table->string('Phone')->nullable();
            $table->string('Facebook')->nullable();
            $table->string('ClassName')->nullable();
            $table->string('Lecture')->nullable();
            $table->string('CourseNew')->nullable();
            $table->tinyInteger('Status')->nullable();
            $table->tinyInteger('Type')->nullable();
            $table->date('RegDateNew')->nullable();
            $table->date('RegDate')->nullable();
            $table->date('Bod')->nullable();
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
        Schema::drop('students');
    }
}
