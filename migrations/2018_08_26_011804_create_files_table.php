<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /*
        CREATE TABLE IF NOT EXISTS `file_collect`.`file`
        (
            `file_id` INT NOT NULL,
            `fi_deadline` DATETIME NOT NULL,
            `fi_registered_no` INT NOT NULL,
            `fi_route_name` VARCHAR(45) NOT NULL,
            `fi_name` VARCHAR(45) NOT NULL,
            `registered_date` TIMESTAMP NOT NULL,
        PRIMARY KEY (`file_id`),
        INDEX `fi_registered_no_fk_idx` (`fi_registered_no` ASC),
        CONSTRAINT `fi_registered_no_fk`
            FOREIGN KEY (`fi_registered_no`)
            REFERENCES `file_collect`.`students` (`stu_no`)
            ON DELETE NO ACTION
            ON UPDATE NO ACTION
         )ENGINE = InnoDB;
        */

        Schema::create('files', function (Blueprint $table) {
            // columns
            $table->increments('file_id')->comment('file\'s number');
            $table->dateTime('fi_deadline')->comment('file\'s deadline');
            $table->integer('fi_registered_no')->unsigned()->commnet('file registered student\'s number');
            $table->integer('fi_route_id')->unsigned()->comment('file\'s save route');
            $table->string('fi_name', 45)->comment('file\'s name');
            $table->timestamp('fi_registered_date')->nullable();
            $table->timestamp('fi_updated_date')->nullable()->comment('last modify date');

            // foreign key
            $table->foreign('fi_registered_no')
                ->references('stu_no')->on('students')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('fi_route_id')
                ->references('fr_route_id')->on('file_routes')
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
        // DROP TABLE IF EXISTS `forLeaderHappiness`.`files` ;
        Schema::dropIfExists('files');
    }
}
