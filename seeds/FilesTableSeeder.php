<?php

use Illuminate\Database\Seeder;

class FilesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 파일 제한 기간
        $fileDeadline           = ['20180908', '20180908', '20180908'];
        // 파일 등록한 학생번호
        $fileRegisteredNumber   = [2, 3, 4];
        // 파일 경로 번호
        $fileRouteId            = [1, 1, 1];
        // 파일 이름
        $fileName               = ['2student', '3student', '4student'];

        // insert dummy data into file table
        for($i = 0 ; $i < count($fileDeadline) ; $i++)
        {
            DB::table('files')->insert
            (
                [
                    'fi_deadline'           =>  $fileDeadline[$i],
                    'fi_registered_no'      =>  $fileRegisteredNumber[$i],
                    'fi_route_id'           =>  $fileRouteId[$i],
                    'fi_name'               =>  $fileName[$i]
                ]
            );
        }
    }
}
