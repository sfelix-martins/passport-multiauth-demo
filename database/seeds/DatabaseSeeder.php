<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\User::create([
            'name' => 'Samuel',
            'email' => 's@mu.el',
            'password' => bcrypt('secret'),
        ]);

        \App\Company::create([
            'name' => 'SMartins',
            'email' => 'sm@rti.ns',
            'password' => bcrypt('secret'),
        ]);

        // $this->call(UsersTableSeeder::class);
    }
}
