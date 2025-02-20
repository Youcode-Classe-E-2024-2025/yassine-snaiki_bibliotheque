<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();
        for ($i = 0; $i < 10; $i++) { // 10 users
            DB::table('users')->insert([
                'username' => $faker->unique()->userName,
                'email' => "user$i@gmail.com",
                'password' => bcrypt('password'),  
                'role' => $faker->randomElement(['admin', 'user']),
                'isactive' => true
            ]);
        }
    }
}
