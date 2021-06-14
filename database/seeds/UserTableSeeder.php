<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\User::create([
            'name' => 'Umar Sabirin',
            'email' => 'umarsabirin369@gmail.com',
            'password' => bcrypt('admin')
        ]);
    }
}
