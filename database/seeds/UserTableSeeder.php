<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([

            'name' => 'SOREYA',
            'phone' => '015380328',
            'usertype'=> 'SOREYA',
            'email' => 'soreya@admin.com',
            'password' => Hash::make('123456789')

        ]);
    }
}
