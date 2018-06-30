<?php

use Illuminate\Database\Seeder;
use App\User;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'firstname' => 'admin',
            'middlename' => 'admin',
            'lastname' => 'admin',
            'address' => 'admin',
            'gender' => 'Male',
            'birth_date' => '2018-06-13',
            'contact_number' => '12345678',
            'email' => 'admin@gmail.com',
            'quota' => '1',
            'username' => 'admin',
            'password' => 'admin'
        ]);
    }
}
