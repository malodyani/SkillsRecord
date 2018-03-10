<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCourseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->unsignedInteger('school_id');
            $table->foreign('school_id')->references('id')->on('school')->onDelete('cascade');
            $table->unsignedInteger('student_id');
            $table->foreign('student_id')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedSmallInteger('type_id');
            $table->foreign('type_id')->references('id')->on('type')->onDelete('cascade');
            $table->date('start_at');
            $table->date('end_at');
            $table->unsignedDecimal('hours');
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
        Schema::dropIfExists('course');
    }
}
