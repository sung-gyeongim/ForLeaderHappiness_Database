<?php

use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * Writer : Sung GyeongIm
     */
    public function run()
    {
        // Student 정보
        $this->call(StudentsTableSeeder::class);
        // file route 정보
        $this->call(FileRoutesTableSeeder::class);
        // boards 정보
        $this->call(BoardsTableSeeder::class);
        // board checked student number 정보
        $this->call(BoardCheckTableSeeder::class);
        // calendar 정보
        $this->call(CalendarTableSeeder::class);
    }
}
