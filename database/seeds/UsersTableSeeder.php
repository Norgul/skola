<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $limit = 30;

        for ($i = 0; $i < $limit; $i++) {
            DB::table('users')->insert([
                'name'    => $faker->name,
                'email_private' => $faker->email,
                'phone_private' => $faker->phoneNumber,
                'phone_work'    => $faker->phoneNumber,
                'phone_home'    => $faker->phoneNumber,
                'email'    => $faker->companyEmail,
                'password'      => $faker->password(6),
                'city'          => $faker->city,
                'address'       => $faker->address,
                'oib'           => $faker->creditCardNumber,
            ]);
        }
    }
}
