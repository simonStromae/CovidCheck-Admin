<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

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
            "username" => "simonStromae",
            "password" => Hash::make("password"),
            "email" => "simonulrich@gmail.com",
            "role" => "Admin"
        ]);
    }
}
