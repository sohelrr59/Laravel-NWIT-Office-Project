<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdmissionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admission', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('student_name');
            $table->string('student_address')->nullable();
            $table->string('student_phone')->unique();
            $table->string('home_phone')->nullable();
            $table->string('email')->nullable();
            $table->string('ae_name')->nullable();
            $table->string('course_title');
            $table->string('course_duration')->nullable();
            $table->string('class_time')->nullable();
            $table->date('admit_date')->nullable();
            $table->string('batch_no')->nullable();
            $table->string('class_day');
            $table->string('course_fee');
            $table->string('discount')->nullable();
            $table->string('net_fee');
            $table->string('student_id');
            $table->string('student_picture')->nullable();
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
        Schema::dropIfExists('admission');
    }
}
