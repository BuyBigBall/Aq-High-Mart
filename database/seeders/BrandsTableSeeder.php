<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BrandsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('brands')->delete();
        
        \DB::table('brands')->insert(array (
            0 => 
            array (
                'id' => 1,
                'brand_name_en' => 'Apple',
                'brand_name_bn' => '苹果',
                'brand_slug_en' => '',
                'brand_slug_bn' => '',
                'brand_image' => 'upload/brands/1723484674182043.png',
                'created_at' => '2022-01-28 08:25:15',
                'updated_at' => '2022-01-31 15:31:08',
            ),
            1 => 
            array (
                'id' => 2,
                'brand_name_en' => 'Xiaomi',
                'brand_name_bn' => '小米',
                'brand_slug_en' => '',
                'brand_slug_bn' => '',
                'brand_image' => 'upload/brands/1723485360850995.png',
                'created_at' => '2022-01-28 08:25:15',
                'updated_at' => '2022-01-31 15:42:03',
            ),
            2 => 
            array (
                'id' => 3,
                'brand_name_en' => 'DELL',
                'brand_name_bn' => 'DELL bn',
                'brand_slug_en' => '',
                'brand_slug_bn' => '',
                'brand_image' => 'upload/brands/1723484894275358.png',
                'created_at' => '2022-01-28 08:25:15',
                'updated_at' => '2022-01-31 15:34:38',
            ),
            3 => 
            array (
                'id' => 4,
                'brand_name_en' => 'Lenovo',
                'brand_name_bn' => '联想',
                'brand_slug_en' => '',
                'brand_slug_bn' => '',
                'brand_image' => 'upload/brands/1723485159242620.png',
                'created_at' => '2022-01-28 08:25:15',
                'updated_at' => '2022-01-31 15:38:51',
            ),
            4 => 
            array (
                'id' => 5,
                'brand_name_en' => 'HP',
                'brand_name_bn' => 'HP',
                'brand_slug_en' => '',
                'brand_slug_bn' => '',
                'brand_image' => 'upload/brands/1723484980555387.png',
                'created_at' => '2022-01-28 08:25:15',
                'updated_at' => '2022-01-31 15:36:00',
            ),
            5 => 
            array (
                'id' => 6,
                'brand_name_en' => 'Tp-Link',
                'brand_name_bn' => 'Tp-Link',
                'brand_slug_en' => '',
                'brand_slug_bn' => '',
                'brand_image' => 'upload/brands/1723485311131255.png',
                'created_at' => '2022-01-28 08:25:16',
                'updated_at' => '2022-01-31 15:41:16',
            ),
        ));
        
        
    }
}