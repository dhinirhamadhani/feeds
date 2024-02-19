<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([

            'email'=>'dhini2010@gmail.com',

            'password'=>bcrypt('dhini2010'),

            'name'=>'DhiniRhamadhani',

        ]);
    }
}
