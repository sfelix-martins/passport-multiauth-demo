<?php

use App\User;
use App\Admin;
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
        User::create([
            'name' => 'User',
            'email' => 'sfelix_martins@hotmail.com',
            'password' => bcrypt('secret'),
        ]);

        Admin::create([
            'name' => 'Admin',
            'email' => 'sfelix_martins@hotmail.com',
            'password' => bcrypt('secret'),
        ]);
    }
}
