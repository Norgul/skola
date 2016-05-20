<?php

use Illuminate\Database\Seeder;

class SubjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $subjects = [
            'Biologija',
            'Engleski jezik',
            'Etika',
            'Filozofija',
            'Fizika',
            'Glazbena umjetnost',
            'Geografija',
            'Hrvatski jezik',
            'Informatika',
            'Kemija',
            'Latinski jezik',
            'Likovna kultura',
            'Logika',
            'Matematika',
            'Makedonski jezik',
            'Njemački jezik',
            'Politika i gospodarstvo',
            'Povijest',
            'Psihologija',
            'Sociologija',
            'Španjolski jezik',
            'Talijanski jezik',
            'Tjelesna i zdravstvena kultura',
            'Vjeronauk',
        ];

        foreach ($subjects as $subject) {
            DB::table('subjects')->insert([
                'name' => $subject,
            ]);
        }

    }
}
