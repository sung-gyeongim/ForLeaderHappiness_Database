<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFileRoutesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    { /*
        CREATE TABLE `forLeaderHappiness.file_routes`
        (
            `f_route_id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'image route table primary key',
            `f_route_name` varchar(32) COLLATE utf8_unicode_ci NOT NULL COMMENT 'route name',
            `f_registered_date` timestamp NULL DEFAULT NULL COMMENT 'register date',
            PRIMARY KEY (`route_no`),
            UNIQUE KEY `image_routes_route_name_unique` (`route_name`)
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci
        */

        Schema::create('file_routes', function (Blueprint $table) {

            $table->increments('fr_route_id')->comment('file\'s route table primary key');
            $table->string('fr_route_name', 32)->comment('file\'s route name');
            $table->timestamp('fr_registered_date')->nullable()->comment('file\'s registered date');

            // unique key
            $table->unique('fr_route_name'); // 경로명 중복 X

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('files');
        // DROP TABLE IF EXISTS `forLeaderHappiness`.`file_routes` ;
        Schema::dropIfExists('file_routes');
    }
}
