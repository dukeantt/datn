<?php

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
        \Illuminate\Support\Facades\DB::table('user')->truncate();
        \Illuminate\Support\Facades\DB::table('user')->insert([

            [
                'username' => 'ngocnam',
                'password' => hash::make('ngocnam'),
                'full_name' => 'Ngô Ngọc Nam',
                'gender' => 2,
                'email' => 'ngocnam@gmail.com',
                'address' => '123 avc',
                'DOB' => '1997-25-07',
                'role' => 2,
                'status' => 1,
                'created_at'=>\Carbon\Carbon::create(2020, 3, 1, 00, 00, 00),
                'updated_at'=>\Carbon\Carbon::create(2020, 3, 1, 00, 00, 00)
            ],
            [
                'username' => 'phuc',
                'password' => hash::make('phuc'),
                'full_name' => 'Vũ Tiến Phúc',
                'address' => '123 avc',
                'gender' => 2,
                'email' => 'phuc@gmail.com',
                'DOB' => '1999-05-05',
                'role' => 2,
                'status' => 1,
                'created_at'=>\Carbon\Carbon::create(2020, 3, 1, 00, 00, 00),
                'updated_at'=>\Carbon\Carbon::create(2020, 3, 1, 00, 00, 00)
            ],
            [
                'username' => 'nam',
                'password' => hash::make('nam'),
                'full_name' => 'Võ Hồ Phương Nam',
                'address' => '123 avc',
                'gender' => 2,
                'email' => 'nam@gmail.com',
                'DOB' => '1997-03-15',
                'role' => 2,
                'status' => 1,
                'created_at'=>\Carbon\Carbon::create(2020, 3, 1, 00, 00, 00),
                'updated_at'=>\Carbon\Carbon::create(2020, 3, 1, 00, 00, 00)
            ],
        ]);
    }
}
