<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     * Writer : Sung Gyeong Im
     * Date : 2018 08 26 Sunday
     * Table Explain : students' information manage table
     * @return void
     */
    public function up()
    {
        /*
        CREATE TABLE IF NOT EXISTS `forLeaderHappiness`.`students`
        (
            `stu_no` INT NOT NULL COMMENT 'student's number',
            `stu_name` VARCHAR(16) NOT NULL COMMENT 'student's name',
            `stu_id` VARCHAR(16) NOT NULL COMMENT 'student's id',
            `stu_pw` VARCHAR(240) NOT NULL COMMENT 'student's password',
            `stu_phone_no` INT(16) NOT NULL COMMENT 'student's phone number',
            `stu_auth` TINYINT NOT NULL COMMENT 'authority',
        PRIMARY KEY (`stu_no`),
        UNIQUE INDEX `students_stu_id_UNIQUE` (`stu_id` ASC)
        )ENGINE = InnoDB;
         */
        Schema::create('students', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            // columns
            $table->increments('stu_no')->comment('student\'s number');
            $table->string('stu_name', 16)->comment('student\'s name');
            $table->string('stu_id', 32)->comment('student\'s id');
            $table->string('stu_pw', 32)->comment('student\'s password');
            $table->string('stu_phone_no', 32)->comment('student\'s phone number');
            $table->integer('stu_auth')->comment('student\'s phone number');


            // unique key
            $table->unique('stu_id');
            $table->unique('stu_phone_no');
            $table->index('stu_auth');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('calendar');
        Schema::dropIfExists('boards');
        Schema::dropIfExists('files');
        // DROP TABLE IF EXISTS `forLeaderHappiness`.`students` ;
        Schema::dropIfExists('students');
    }
}
