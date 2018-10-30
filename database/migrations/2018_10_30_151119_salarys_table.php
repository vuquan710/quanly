<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SalarysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salarys', function (Blueprint $table) {
            $table->increments('id');
            $table->string('EmployeeId')->nullable(false);
            $table->string('Name')->nullable();
            $table->integer('Work')->nullable();
            $table->string('Basic')->nullable();
            $table->string('Bonus')->nullable();
            $table->date('Month')->nullable();
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
        Schema::drop('salarys');
    }
}
