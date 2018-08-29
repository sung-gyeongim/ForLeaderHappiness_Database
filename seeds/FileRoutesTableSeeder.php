<?php

use Illuminate\Database\Seeder;

class FileRoutesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 경로 이름
        $routeName =
            [
                'students/information', 'students/file'
            ];

        // insert dummy data into file_routes table
        for ($i = 0; $i < count($routeName); $i++) {

            DB::table('file_routes')->insert
            (
                [
                    'fr_route_name' => $routeName[$i],
                ]
            );
        }
    }
}
