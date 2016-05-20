<?php

use Illuminate\Database\Seeder;

class GradesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $grades = [
            '1a', '1b', '1c', '1d', '1e', '1f',
            '2a', '2b', '2c', '2d', '2e', '2f',
            '3a', '3b', '3c', '3d', '3e', '3f',
            '4a', '4b', '4c', '4d', '4e', '4f',
        ];

        foreach($grades as $grade){
            DB::table('grades')->insert([
                'name'  => $grade,
            ]);
        }
    }
}
