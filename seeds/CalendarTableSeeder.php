<?php

use Illuminate\Database\Seeder;

class CalendarTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 일정 제목
        $calendarTitle          = ['파소나테크 회사 설명회', '라이풀 회사 설명회', 'KDDI 온라인 설명회', '라이풀 스페이스 온라인 회사 설명회', '톤가루만 회사 설명회'];
        // 시작일
        $stardDate              = ['20180831', '20180904', '20180907', '20180911', '20180917'];
        // 종료일
        $finishDate             = ['20180831', '20180904', '20180907', '20180911', '20180917'];
        // 일정 내용
        $calendarContent        = ['파소나테크 회사 설명회', '라이풀 회사 설명회', 'KDDI 온라인 설명회', '라이풀 스페이스 온라인 회사 설명회', '톤가루만 회사 설명회'];
        // 일정 등록한 학생 권한 번호
        $calendarStuAuth        = [1, 1, 1, 1, 1];
        // 일정 등록한 학생 번호
        $calendarWirterNumber   = [1, 1, 1, 1, 1];

        // insert dummy data into calendar table
        for($i = 0 ; $i < count($calendarTitle) ; $i++)
        {
            DB::table('calendar')->insert
            (
                [
                    'ca_title'      =>  $calendarTitle[$i],
                    'start_date'    =>  $stardDate[$i],
                    'finish_date'   =>  $finishDate[$i],
                    'ca_content'    =>  $calendarContent[$i],
                    'ca_stu_auth'   =>  $calendarStuAuth[$i],
                    'ca_writer_no'  =>  $calendarWirterNumber[$i]
                ]
            );
        }
    }
}
