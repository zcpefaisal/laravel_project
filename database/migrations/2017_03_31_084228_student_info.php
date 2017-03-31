<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class StudentInfo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('student_info', function(Blueprint $table){
            $table->increments('student_id');
            $table->string('name');
            $table->string('email');
            $table->string('password');
            $table->string('language');
            $table->string('gander');
            $table->integer('std_class');
            $table->string('note');
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
        //
        Schema::drop('student_info');
    }
}
