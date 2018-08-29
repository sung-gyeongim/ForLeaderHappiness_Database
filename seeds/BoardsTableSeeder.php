<?php

use Illuminate\Database\Seeder;

class BoardsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 게시글 제목
        $boardTitle             =    ['test一！', 'test二！', 'test三！', 'test四！', 'test五！'];
        // 게시글 내용
        $boardContent           =    ['test一ですよ~~', 'test二ですよ~~', 'test三ですよ~~', 'test四ですよ~~', 'test五ですよ~~'];
        // 게시글 등록자 번호
        $boardRegisterNumber    =    [1, 1, 1, 1, 1];
        // 조회수
        $hit                    =    [3, 2, 0, 0, 0];


        // insert dummy data into boards table
        for ($i = 0; $i < count($boardTitle); $i++) {
            DB::table('boards')->insert
            (
                [
                    'bo_title'          => $boardTitle[$i],
                    'bo_content'        => $boardContent[$i],
                    'bo_register_no'    => $boardRegisterNumber[$i],
                    'hit'               => $hit[$i]
                ]
            );
        }

    }
}
