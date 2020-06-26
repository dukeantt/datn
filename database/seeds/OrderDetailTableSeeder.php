<?php

use Illuminate\Database\Seeder;

class OrderDetailTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS=0');
        \Illuminate\Support\Facades\DB::table('order_detail')->truncate();
        \Illuminate\Support\Facades\DB::table('order_detail')->insert([
            [
                'order_id'=>1,
                'product_id'=>2,
                'quantity'=>1,
                'unit_price'=>1750000
            ],
            [
                'order_id'=>2,
                'product_id'=>3,
                'quantity'=>1,
                'unit_price'=>790000
            ],
            [
                'order_id'=>3,
                'product_id'=>5,
                'quantity'=>1,
                'unit_price'=>2500000
            ],
        ]);    }
}
