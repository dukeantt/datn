<?php

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
        \Illuminate\Support\Facades\DB::table('users')->truncate();
        \Illuminate\Support\Facades\DB::table('users')->insert([


            [
                'username'=>'ducanh2312',
                'password'=>hash::make('ducanh2312'),
                'full_name'=>'admin',
                'gender'=>2,
                'address'=>'Hanoi',
                'email'=>'ducanh@gmail.com',
                'DOB'=>'1997-23-12',
                'phone'=>'0123456789',
                'role'=>1,
                'status'=>1
            ],

        ]);
    }
}
