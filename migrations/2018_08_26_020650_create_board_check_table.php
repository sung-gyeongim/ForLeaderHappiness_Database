<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBoardCheckTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('board_check', function (Blueprint $table) {
            $table->increments('bc_id');
            $table->integer('bc_board_id')->unsigned();
            $table->integer('bc_no')->unsigned();
            $table->timestamp('checked_time')->nullable();

            // foreign key
            $table->foreign('bc_board_id')
                ->references('bo_id')->on('boards')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('bc_no')
                ->references('stu_no')->on('students')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            //unique key
            $table->unique(array('bc_no', 'bc_board_id'));
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
    }
}
