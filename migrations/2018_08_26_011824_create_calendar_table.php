<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCalendarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /*
         CREATE TABLE IF NOT EXISTS `forLeaderHappiness`.`calendar`
        (
            `ca_title` VARCHAR(45) NOT NULL,
            `progress_date1` DATETIME NOT NULL,
            `progress_date2` DATETIME NOT NULL,
            `ca_content` TEXT NOT NULL,
            `ca_registered_no` INT NOT NULL,
        INDEX `dafsdfa_idx` (`ca_registered_no` ASC),
        CONSTRAINT `ca_registered_no_fk`
            FOREIGN KEY (`ca_registered_no`)
            REFERENCES `file_collect`.`students` (`stu_no`)
            ON DELETE NO ACTION
            ON UPDATE NO ACTION
        )ENGINE = InnoDB;
        */
        Schema::create('calendar', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('ca_id');
            $table->string('ca_title', 45);
            $table->date('start_date');
            $table->date('finish_date');
            $table->text('ca_content');

            $table->integer('ca_stu_auth');
            $table->integer('ca_writer_no')->unsigned();


            $table->timestamp('ca_registered_date')->nullable();

            // foreign key
            $table->foreign('ca_writer_no')
                ->references('stu_no')->on('students')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('ca_stu_auth')
                ->references('stu_auth')->on('students')
                ->onDelete('cascade')
                ->onUpdate('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('board_check');
        // DROP TABLE IF EXISTS `forLeaderHappiness`.`calendar` ;
        Schema::dropIfExists('calendar');
    }
}
