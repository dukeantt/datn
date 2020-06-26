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
                'name' => 'JACKETS',
                'description' => 'Áo khoác',
                'status' => '1',
            ],
            [
                'id' => '2',
                'name' => 'HOODIES',
                'description' => 'Áo hoodies',
                'status' => '1',
            ],
            [
                'id' => '3',
                'name' => 'TROUSERS',
                'description' => 'Quần',
                'status' => '1',
            ],
            [
                'id' => '4',
                'name' => 'ACCESSORIES',
                'description' => 'Phụ kiện',
                'status' => '1',
            ],
            [
                'id' => '5',
                'name' => 'SHOES',
                'description' => 'Giầy',
                'status' => '1',
            ],
        ]);
    }
}
