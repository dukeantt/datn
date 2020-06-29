<?php

use Illuminate\Database\Seeder;

class OrderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS=0');
        \Illuminate\Support\Facades\DB::table('order')->truncate();
        \Illuminate\Support\Facades\DB::table('order')->insert([
            [
                'customer_id' => 'KH1568456924',
                'ship_address' => '196 Đại Cổ Việt, Hà Nội',
                'ship_name' => 'Ngô Ngọc Nam',
                'payment_method' => 'Cod',
                'ship_email' => 'ngocnam@gmail.com',
                'ship_phone' => '01548795621',
                'total_price' => 300000,
                'created_at' => \Carbon\Carbon::create(2020, 3, 20, 6, 32, 34),
                'updated_at' => \Carbon\Carbon::create(2020, 3, 20, 12, 15, 15),
                'status' => 2
            ],
            [
                'customer_id' => 'KH4158745198',
                'ship_address' => '196 Bach Mai, Hà Nội',
                'ship_name' => 'Vũ Tiến Phúc',
                'ship_email' => 'tienphuc@gmail.com',
                'payment_method' => 'Cod',
                'ship_phone' => '0989874514',
                'total_price' => 300000,
                'created_at' => \Carbon\Carbon::create(2020, 3, 26, 3, 33, 33),
                'updated_at' => \Carbon\Carbon::create(2020, 3, 26, 10, 16, 16),
                'status' => 2
            ],
            [
                'customer_id' => 'KH2648741598',
                'ship_address' => '56 Bach Mai, Hà Nội',
                'ship_name' => 'Võ Hồ Phương Nam',
                'payment_method' => 'Cod',
                'ship_email' => 'phuongnam@gmail.com',
                'ship_phone' => '012345667889',
                'total_price' => 300000,
                'created_at' => \Carbon\Carbon::create(2020, 3, 24, 3, 32, 32),
                'updated_at' => \Carbon\Carbon::create(2020, 3, 24, 13, 17, 17),
                'status' => 2
            ],
        ]);
    }
}
