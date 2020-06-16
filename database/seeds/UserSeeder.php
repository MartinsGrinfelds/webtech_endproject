<?php

use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::truncate();
        User::create(array('name' => 'Admin',
                           'email' => 'admin@galadarbs.test', 
                           'password' => bcrypt('admin'),
                           'role' => 1));
    }
}
