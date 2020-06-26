<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        \Illuminate\Support\Facades\DB::table('product')->truncate();
        \Illuminate\Support\Facades\DB::table('product')->insert([
            [
                'name' => 'Oversized Nylon Sweatshirt',
                'images' => 'https://res.cloudinary.com/dzbi63fko/image/upload/v1584332733/gold-standard-whey-5lbs-chinh-hang_gr77b6.png',
                'price' => 550000,
                'category_id' => '1',
                'type_id' => '1',
                'status' => '1',
                'description' => 'Designed with dropped shoulders, this oversized sweatshirt is made from mid-weight Japanese nylon that has a slightly iridescent finish in the right light. It’s fully lined in breathable mesh and finished with a rubber designer emblem at the back that doubles as a locker loop.',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],
            [
                'name' => 'Rag & Bone Beck Coat',
                'images' => 'https://res.cloudinary.com/dzbi63fko/image/upload/v1584332733/gold-standard-whey-5lbs-chinh-hang_gr77b6.png',
                'price' => 400000,
                'category_id' => '1',
                'type_id' => '1',
                'status' => '1',
                'description' => 'A go-everywhere coat, cut from a wool blend custom plaid with an oversized fit and drawstring hood.',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],
            [
                'name' => 'Oversize Drawstring Sweatshirt',
                'images' => 'https://res.cloudinary.com/dzbi63fko/image/upload/v1584332733/gold-standard-whey-5lbs-chinh-hang_gr77b6.png',
                'price' => 300000,
                'category_id' => '1',
                'type_id' => '1',
                'status' => '1',
                'description' => 'Long sleeve oversize sweatshirt with an adjustable drawstring detail on the hem and a round neckline.',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],
            [
                'name' => 'Folk Striped Slub Cotton-Jersey T-Shirt',
                'images' => 'https://res.cloudinary.com/dzbi63fko/image/upload/v1584332733/gold-standard-whey-5lbs-chinh-hang_gr77b6.png',
                'price' => 300000,
                'category_id' => '1',
                'type_id' => '1',
                'status' => '1',
                'description' => '',
                'created_at' => \Carbon\Carbon::create(2020, 2, 6, 17, 21, 22),
                'updated_at' => \Carbon\Carbon::create(2020, 2, 6, 17, 29, 25)
            ],
            [
                'name' => 'Faux Shearling Jacket With Contrast Detail',
                'images' => 'https://res.cloudinary.com/dzbi63fko/image/upload/v1584332733/gold-standard-whey-5lbs-chinh-hang_gr77b6.png',
                'price' => 550000,
                'category_id' => '1',
                'type_id' => '1',
                'status' => '1',
                'description' => 'Faux shearling jacket with a contrast detail on the chest, long sleeves, a high neck, zip fastening and an elasticated hem and cuffs.',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],
            [
                'name' => 'Dyed Shell PrimaLoft Hooded Field Jacket',
                'images' => 'https://res.cloudinary.com/dzbi63fko/image/upload/v1584332733/gold-standard-whey-5lbs-chinh-hang_gr77b6.png',
                'price' => 600000,
                'category_id' => '1',
                'type_id' => '1',
                'status' => '1',
                'description' => '',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],
        ]);
    }
}
