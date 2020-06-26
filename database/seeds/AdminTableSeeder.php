<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('admin')->truncate();
        \Illuminate\Support\Facades\DB::table('admin')->insert([

            [
                'username' => 'ducanh2312',
                'password' => hash::make('ducanh2312'),
                'full_name' => 'ngducanh',
                'gender' => 2,
                'email' => 'ducanh@gmail.com',
                'DOB' => '1997-23-12',
                'role' => 1,
                'status' => 1
            ],
        ]);
    }
}
