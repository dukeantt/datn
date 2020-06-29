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
                'images' => 'https://res.cloudinary.com/fashionvietnam/image/upload/v1593262447/5983760398347411_01-350x435_mjy3pv.jpg',
                'price' => 550000,
                'category_id' => '2',
                'type_id' => '1',
                'status' => '1',
                'description' => 'Designed with dropped shoulders, this oversized sweatshirt is made from mid-weight Japanese nylon that has a slightly iridescent finish in the right light. It’s fully lined in breathable mesh and finished with a rubber designer emblem at the back that doubles as a locker loop.',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],
            [
                'name' => 'Rag & Bone Beck Coat',
                'images' => 'https://res.cloudinary.com/fashionvietnam/image/upload/v1593262447/Beck-Coat-01-350x435_xosge9.jpg',
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
                'images' => 'https://res.cloudinary.com/fashionvietnam/image/upload/v1593262447/9596322500_2_1_8_1-350x435_fgoejq.jpg',
                'price' => 300000,
                'category_id' => '2',
                'type_id' => '1',
                'status' => '1',
                'description' => 'Long sleeve oversize sweatshirt with an adjustable drawstring detail on the hem and a round neckline.',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],
            [
                'name' => 'Folk Striped Slub Cotton-Jersey T-Shirt',
                'images' => 'https://res.cloudinary.com/fashionvietnam/image/upload/v1593262447/4146401443863639_01-350x435_ypz3qm.jpg',
                'price' => 300000,
                'category_id' => '2',
                'type_id' => '1',
                'status' => '1',
                'description' => '',
                'created_at' => \Carbon\Carbon::create(2020, 2, 6, 17, 21, 22),
                'updated_at' => \Carbon\Carbon::create(2020, 2, 6, 17, 29, 25)
            ],
            [
                'name' => 'Faux Shearling Jacket With Contrast Detail',
                'images' => 'https://res.cloudinary.com/fashionvietnam/image/upload/v1593262447/1569587715268-350x435_ozfmid.jpg',
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
                'images' => 'https://res.cloudinary.com/fashionvietnam/image/upload/v1593262448/stone-island-jacket-a_jv4scc.jpg',
                'price' => 400000,
                'category_id' => '1',
                'type_id' => '1',
                'status' => '1',
                'description' => '',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],
            [
                'name' => 'Áo Hoodies Straight Up',
                'images' => 'https://res.cloudinary.com/fashionvietnam/image/upload/v1593318180/straight_up_hoodie_mt_b34c1ca84ab24c6b998701cf48aee359_master_lxmwcu.webp',
                'price' => 200000,
                'category_id' => '2',
                'type_id' => '1',
                'status' => '1',
                'description' => '',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],
            [
                'name' => 'Áo Hoodies Time Stop',
                'images' => 'https://res.cloudinary.com/fashionvietnam/image/upload/v1593318182/time_stop_hoodie_mt_0064296d8a1e4480914e7e22ef65dde8_master_xtccfm.webp',
                'price' => 600000,
                'category_id' => '2',
                'type_id' => '1',
                'status' => '1',
                'description' => '',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],
            [
                'name' => 'Áo Hoodies Rose',
                'images' => 'https://res.cloudinary.com/fashionvietnam/image/upload/v1593318186/hoodie_rose_trang_mt_7b1f83786bc4478192d63455049c96c2_master_1_agc964.webp',
                'price' => 200000,
                'category_id' => '2',
                'type_id' => '1',
                'status' => '1',
                'description' => '',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],
            [
                'name' => 'Áo Hoodies Monday',
                'images' => 'https://res.cloudinary.com/fashionvietnam/image/upload/v1593318185/hoodie_monday_f51609953d5e46c7bb242e5988862d68_master_vip2be.webp',
                'price' => 350000,
                'category_id' => '2',
                'type_id' => '1',
                'status' => '1',
                'description' => '',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],
            [
                'name' => 'Áo Hoodies Signature',
                'images' => 'https://res.cloudinary.com/fashionvietnam/image/upload/v1593318189/sig_hoodie_trang_67c1fbf990b64823b6dba6a66bc55e5a_master_pvdti0.webp',
                'price' => 400000,
                'category_id' => '2',
                'type_id' => '1',
                'status' => '1',
                'description' => '',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],
            [
                'name' => 'Áo Hoodies Rose Đen',
                'images' => 'https://res.cloudinary.com/fashionvietnam/image/upload/v1593318195/hoodie_rose_den_mt_c00e3495543149ba8f81b21a0d2aff66_master_frtdad.jpg',
                'price' => 350000,
                'category_id' => '2',
                'type_id' => '1',
                'status' => '1',
                'description' => '',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],
            [
                'name' => 'Áo Hoodies Signature Đen',
                'images' => 'https://res.cloudinary.com/fashionvietnam/image/upload/v1593318196/sig_hoodie_den_7074a6cab62141a98f832b530af8cbcb_master_mggi72.webp',
                'price' => 200000,
                'category_id' => '2',
                'type_id' => '1',
                'status' => '1',
                'description' => '',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],
            [
                'name' => 'Áo Hoodies Noel',
                'images' => 'https://res.cloudinary.com/fashionvietnam/image/upload/v1593318202/4bd1dfd2-666d-4ec4-a230-c96b811cfb3a_47e891a50cfc4d06856cc2bc80fe07cf_master_otjdkn.jpg',
                'price' => 600000,
                'category_id' => '2',
                'type_id' => '1',
                'status' => '1',
                'description' => '',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],
            [
                'name' => 'Áo Hoodies Vine Hood',
                'images' => 'https://res.cloudinary.com/fashionvietnam/image/upload/v1593318255/vines_hood_mt_cfc4101fd0174208b9b6794379768bbb_master_erislj.jpg',
                'price' => 350000,
                'category_id' => '2',
                'type_id' => '1',
                'status' => '1',
                'description' => '',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],
            [
                'name' => 'Quần Short Thể Thao',
                'images' => 'https://res.cloudinary.com/fashionvietnam/image/upload/v1593318528/quan-short-the-thao-nam-4_fgp5oc.jpg',
                'price' => 400000,
                'category_id' => '3',
                'type_id' => '1',
                'status' => '1',
                'description' => '',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],
            [
                'name' => 'Quần Khaki Dài',
                'images' => 'https://res.cloudinary.com/fashionvietnam/image/upload/v1593318529/1-2-1_og6h88.jpg',
                'price' => 200000,
                'category_id' => '3',
                'type_id' => '1',
                'status' => '1',
                'description' => '',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],
            [
                'name' => 'Quần Khaki Dài Be',
                'images' => 'https://res.cloudinary.com/fashionvietnam/image/upload/v1593318529/2-1-1_jdruhk.jpg',
                'price' => 600000,
                'category_id' => '3',
                'type_id' => '1',
                'status' => '1',
                'description' => '',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],
            [
                'name' => 'Quần Short Cargo',
                'images' => 'https://res.cloudinary.com/fashionvietnam/image/upload/v1593318529/3_2_wpxy8k.jpg',
                'price' => 600000,
                'category_id' => '3',
                'type_id' => '1',
                'status' => '1',
                'description' => '',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],
            [
                'name' => 'Quần Short Cơ Bản',
                'images' => 'https://res.cloudinary.com/fashionvietnam/image/upload/v1593318529/2_1_trerfx.jpg',
                'price' => 350000,
                'category_id' => '3',
                'type_id' => '1',
                'status' => '1',
                'description' => '',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],
            [
                'name' => 'Quần Thể Thao Leo Núi',
                'images' => 'https://res.cloudinary.com/fashionvietnam/image/upload/v1593318530/quan-dai-chong-tham-leo-nui-da-ngoai-cho-nu-den_bnpy1q.jpg',
                'price' => 600000,
                'category_id' => '3',
                'type_id' => '1',
                'status' => '1',
                'description' => '',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],
            [
                'name' => 'Quần Short',
                'images' => 'https://res.cloudinary.com/fashionvietnam/image/upload/v1593318529/1-1_bkje2o.jpg',
                'price' => 200000,
                'category_id' => '3',
                'type_id' => '1',
                'status' => '1',
                'description' => '',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],
            [
                'name' => 'Quần Jeans Cơ Bản',
                'images' => 'https://res.cloudinary.com/fashionvietnam/image/upload/v1593318531/quanjean_ivp6wy.jpg',
                'price' => 400000,
                'category_id' => '3',
                'type_id' => '1',
                'status' => '1',
                'description' => '',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],
            [
                'name' => 'Quần Nỉ',
                'images' => 'https://res.cloudinary.com/fashionvietnam/image/upload/v1593318531/quanni_tlaycg.jpg',
                'price' => 600000,
                'category_id' => '3',
                'type_id' => '1',
                'status' => '1',
                'description' => '',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],
            [
                'name' => 'Quần Jeans Cotton',
                'images' => 'https://res.cloudinary.com/fashionvietnam/image/upload/v1593318534/jeanscotton_selhiz.jpg',
                'price' => 350000,
                'category_id' => '3',
                'type_id' => '1',
                'status' => '1',
                'description' => '',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],
            [
                'name' => 'Áo Khoác Nam Bò',
                'images' => 'https://res.cloudinary.com/fashionvietnam/image/upload/v1593318891/mens-black-jacket-500x500_bxe4qu.jpg',
                'price' => 200000,
                'category_id' => '1',
                'type_id' => '1',
                'status' => '1',
                'description' => '',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],
            [
                'name' => 'Áo Phao',
                'images' => 'https://res.cloudinary.com/fashionvietnam/image/upload/v1593318891/DEEINK_D2_prsnev.jpg',
                'price' => 600000,
                'category_id' => '1',
                'type_id' => '1',
                'status' => '1',
                'description' => '',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],
            [
                'name' => 'Áo Khoác Tsun Trắng Đen',
                'images' => 'https://res.cloudinary.com/fashionvietnam/image/upload/v1593318891/6bb89d21-909f-483b-8fd8-1fd179177b37_6d3c743c8e6e4b8db956cc84bc9b82fe_master_ivh80o.webp',
                'price' => 350000,
                'category_id' => '1',
                'type_id' => '1',
                'status' => '1',
                'description' => '',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],
            [
                'name' => 'Áo Khoác SWE',
                'images' => 'https://res.cloudinary.com/fashionvietnam/image/upload/v1593318891/4_1_d39b982c013347bfa0197886f73df0ac_master_z4frro.webp',
                'price' => 600000,
                'category_id' => '1',
                'type_id' => '1',
                'status' => '1',
                'description' => '',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],
            [
                'name' => 'Áo Khoác Nam Cơ Bản',
                'images' => 'https://res.cloudinary.com/fashionvietnam/image/upload/v1593318891/61fTX5TjAEL._UX679__oqeoit.jpg',
                'price' => 200000,
                'category_id' => '1',
                'type_id' => '1',
                'status' => '1',
                'description' => '',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],
            [
                'name' => 'Áo Khoác Gió',
                'images' => 'https://res.cloudinary.com/fashionvietnam/image/upload/v1593318892/p1484231_mmgwpp.jpg',
                'price' => 350000,
                'category_id' => '1',
                'type_id' => '1',
                'status' => '1',
                'description' => '',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],
            [
                'name' => 'Áo Khoác Gió Thể Thao',
                'images' => 'https://res.cloudinary.com/fashionvietnam/image/upload/v1593318892/p1684247_u6mkty.jpg',
                'price' => 400000,
                'category_id' => '1',
                'type_id' => '1',
                'status' => '1',
                'description' => '',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],
            [
                'name' => 'Áo Khoác 19',
                'images' => 'https://res.cloudinary.com/fashionvietnam/image/upload/v1593318892/2_4_185979090c9a45f9a2058ce6ad3e6fc9_master_hsfkmf.webp',
                'price' => 200000,
                'category_id' => '1',
                'type_id' => '1',
                'status' => '1',
                'description' => '',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],
            [
                'name' => 'Áo Khoác 20',
                'images' => 'https://res.cloudinary.com/fashionvietnam/image/upload/v1593318892/1__1__pq_394ca5cb66a244449862e57c9c916d0f_master_q4jkp8.webp',
                'price' => 350000,
                'category_id' => '1',
                'type_id' => '1',
                'status' => '1',
                'description' => '',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],
            [
                'name' => 'Ví dằn di xanh',
                'images' => 'https://res.cloudinary.com/fashionvietnam/image/upload/v1593319680/blue-camo-wallet-2_f0a5840f25e24634ad8bc7e303539c0d_grande_iz5bsw.webp',
                'price' => 600000,
                'category_id' => '4',
                'type_id' => '1',
                'status' => '1',
                'description' => '',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],
            [
                'name' => 'Mũ vải',
                'images' => 'https://res.cloudinary.com/fashionvietnam/image/upload/v1593319680/2bbc02d7d17e785dfc468b4f6dbbe60e5c996214_xxl-1_sh6ool.jpg',
                'price' => 400000,
                'category_id' => '4',
                'type_id' => '1',
                'status' => '1',
                'description' => '',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],
            [
                'name' => 'Kính chống năng gọng trong',
                'images' => 'https://res.cloudinary.com/fashionvietnam/image/upload/v1593319680/d16b416f62b747ece95f4595586c2313e6a1a3a8_xxl-1_sx986q.jpg',
                'price' => 350000,
                'category_id' => '4',
                'type_id' => '1',
                'status' => '1',
                'description' => '',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],
            [
                'name' => 'Kính chống năng gọng đen',
                'images' => 'https://res.cloudinary.com/fashionvietnam/image/upload/v1593319680/d023602d10715b02c5bba37eb4fd376ce79f9e81_xxl-1_wpegii.jpg',
                'price' => 600000,
                'category_id' => '4',
                'type_id' => '1',
                'status' => '1',
                'description' => '',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],
            [
                'name' => 'Kính chống năng gọng vàng',
                'images' => 'https://res.cloudinary.com/fashionvietnam/image/upload/v1593319680/ea24f1f87d85aa1da06204de598012c22db534d4_xxl-1_l4dgty.jpg',
                'price' => 200000,
                'category_id' => '4',
                'type_id' => '1',
                'status' => '1',
                'description' => '',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],
            [
                'name' => 'Giầy thể thao đen',
                'images' => 'https://res.cloudinary.com/fashionvietnam/image/upload/v1593320228/25231c6d33faa7660eb30a6ea69b1624da9e51c8_xxl-1_t7wyja.jpg',
                'price' => 350000,
                'category_id' => '5',
                'type_id' => '1',
                'status' => '1',
                'description' => '',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],
            [
                'name' => 'Giầy Thể Thao Trắng',
                'images' => 'https://res.cloudinary.com/fashionvietnam/image/upload/v1593320228/b93ffa7eab7b769523e7aafa6715b9e39b352ffd_xxl-1_oytuhw.jpg',
                'price' => 600000,
                'category_id' => '5',
                'type_id' => '1',
                'status' => '1',
                'description' => '',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],
            [
                'name' => 'Giầy Thể Thao Trắng Đen',
                'images' => 'https://res.cloudinary.com/fashionvietnam/image/upload/v1593320228/3568bb42980078415119d3bf0edb2a9c4fbb3d14_xxl-1_z8dquu.jpg',
                'price' => 400000,
                'category_id' => '5',
                'type_id' => '1',
                'status' => '1',
                'description' => '',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],
            [
                'name' => 'Giầy Thể Thao Hoạt Hình',
                'images' => 'https://res.cloudinary.com/fashionvietnam/image/upload/v1593320228/29820b1fbb11d52a1aaa5893caddff8cc9d11e49_xxl-1_tpiwsr.jpg',
                'price' => 350000,
                'category_id' => '5',
                'type_id' => '1',
                'status' => '1',
                'description' => '',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],
            [
                'name' => 'Giầy Tây Đen',
                'images' => 'https://res.cloudinary.com/fashionvietnam/image/upload/v1593320228/7451eac43ba99557b48f6242458b6e89624ded71_xxl-1_b9skw4.jpg',
                'price' => 200000,
                'category_id' => '5',
                'type_id' => '1',
                'status' => '1',
                'description' => '',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],
            [
                'name' => 'Giầy Tây Nâu',
                'images' => 'https://res.cloudinary.com/fashionvietnam/image/upload/v1593320228/b89f69632ed64ec3c6a37cba7aadee632168128a_xxl-1_eict59.jpg',
                'price' => 600000,
                'category_id' => '5',
                'type_id' => '1',
                'status' => '1',
                'description' => '',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],
            [
                'name' => 'Giầy Tây Cơ Bản',
                'images' => 'https://res.cloudinary.com/fashionvietnam/image/upload/v1593320228/8b97f5b8fadba7c6c1f1fe8073c6a2da09a607ab_xxl-1_hbnz8n.jpg',
                'price' => 350000,
                'category_id' => '5',
                'type_id' => '1',
                'status' => '1',
                'description' => '',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],
            [
                'name' => 'Giầy Thể Thao Trắng Cơ Bản',
                'images' => 'https://res.cloudinary.com/fashionvietnam/image/upload/v1593320228/2c89fc9850be4249fec9c1a7b492caf4dd171a11_xxl-1_prptmh.jpg',
                'price' => 600000,
                'category_id' => '5',
                'type_id' => '1',
                'status' => '1',
                'description' => '',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],
            [
                'name' => 'Giầy Cổ Cao Nâu',
                'images' => 'https://res.cloudinary.com/fashionvietnam/image/upload/v1593320229/9e1dc035c2268ec5200cecb508da98a7e9595a5d_xxl-1_hts43g.jpg',
                'price' => 600000,
                'category_id' => '5',
                'type_id' => '1',
                'status' => '1',
                'description' => '',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],
            [
                'name' => 'Giầy Chelsea Đen',
                'images' => 'https://res.cloudinary.com/fashionvietnam/image/upload/v1593320228/95a189eb434c7b92f3480a48dce6e8797dd9310b_xxl-1_ivkqvf.jpg',
                'price' => 350000,
                'category_id' => '5',
                'type_id' => '1',
                'status' => '1',
                'description' => '',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],
            [
                'name' => 'Giầy Chelsea Nâu',
                'images' => 'https://res.cloudinary.com/fashionvietnam/image/upload/v1593320229/3565dd8dcccd7d389b67e2786f2d83e0313b8631_xxl-1_jk5mwp.jpg',
                'price' => 200000,
                'category_id' => '5',
                'type_id' => '1',
                'status' => '1',
                'description' => '',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],
            [
                'name' => 'Giầy Cổ Cao Nâu Đậm',
                'images' => 'https://res.cloudinary.com/fashionvietnam/image/upload/v1593320228/95a189eb434c7b92f3480a48dce6e8797dd9310b_xxl-1_ivkqvf.jpg',
                'price' => 600000,
                'category_id' => '5',
                'type_id' => '1',
                'status' => '1',
                'description' => '',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],
            [
                'name' => 'Giầy Cổ Cao Phối Màu Nâu Xanh',
                'images' => 'https://res.cloudinary.com/fashionvietnam/image/upload/v1593320228/bcda1901ed3de1ae778f993b663d8c7a3010d1b0_xxl-1_z26zfg.jpg',
                'price' => 350000,
                'category_id' => '5',
                'type_id' => '1',
                'status' => '1',
                'description' => '',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],
            [
                'name' => 'Giầy Chạy',
                'images' => 'https://res.cloudinary.com/fashionvietnam/image/upload/v1593320229/0784e36c24e351cd850617ed43b1cff870d1f866_xxl-1_s1qve7.jpg',
                'price' => 200000,
                'category_id' => '5',
                'type_id' => '1',
                'status' => '1',
                'description' => '',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],
        ]);
    }
}
