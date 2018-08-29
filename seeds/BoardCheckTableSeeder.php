<?php

use Illuminate\Database\Seeder;

class BoardCheckTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 게시글 번호
        $boardId                =   [1, 1, 2, 1, 2];
        // 게시글 확인한 학생번호
        $boardCheckedNumber     =   [2, 4, 3, 3, 5];

        // insert dummy data into board_check table
        for ($i = 0; $i < count($boardId); $i++) {
            DB::table('board_check')->insert
            (
                [
                    'bc_board_id'   =>  $boardId[$i],
                    'bc_no'         =>  $boardCheckedNumber[$i]
                ]
            );
        }
    }
}
