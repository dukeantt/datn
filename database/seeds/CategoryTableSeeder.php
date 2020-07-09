<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        \Illuminate\Support\Facades\DB::table('category')->truncate();
        \Illuminate\Support\Facades\DB::table('category')->insert([
            [
                'id' => '1',
                'name' => 'ÁO KHOÁC',
                'image' => 'https://res.cloudinary.com/fashionvietnam/image/upload/v1593318892/2_4_185979090c9a45f9a2058ce6ad3e6fc9_master_hsfkmf.webp',
                'description' => 'Áo khoác',
                'status' => '1',
            ],
            [
                'id' => '2',
                'name' => 'ÁO HOODIES',
                'image' => 'https://res.cloudinary.com/fashionvietnam/image/upload/v1593318180/straight_up_hoodie_mt_b34c1ca84ab24c6b998701cf48aee359_master_lxmwcu.webp',
                'description' => 'Áo hoodies',
                'status' => '1',
            ],
            [
                'id' => '3',
                'name' => 'QUẦN',
                'image' => 'https://res.cloudinary.com/fashionvietnam/image/upload/v1593318529/1-2-1_og6h88.jpg',
                'description' => 'Quần',
                'status' => '1',
            ],
            [
                'id' => '4',
                'name' => 'PHỤ KIỆN',
                'image' => 'https://res.cloudinary.com/fashionvietnam/image/upload/v1593319680/d16b416f62b747ece95f4595586c2313e6a1a3a8_xxl-1_sx986q.jpg',
                'description' => 'Phụ kiện',
                'status' => '1',
            ],
            [
                'id' => '5',
                'name' => 'GIẦY',
                'image' => 'https://res.cloudinary.com/fashionvietnam/image/upload/v1593320228/29820b1fbb11d52a1aaa5893caddff8cc9d11e49_xxl-1_tpiwsr.jpg',
                'description' => 'Giầy',
                'status' => '1',
            ],
        ]);
    }
}
