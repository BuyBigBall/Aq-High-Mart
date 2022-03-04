<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SubCategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('sub_categories')->delete();
        
        \DB::table('sub_categories')->insert(array (
            0 => 
            array (
                'id' => 1,
                'subcategory_name_en' => 'Wayne Feeney',
                'subcategory_name_bn' => '时尚服装',
                'subcategory_slug_en' => 'wayne-feeney',
                'subcategory_slug_bn' => 'wayne-feeney',
                'category_id' => 1,
                'created_at' => '2022-01-28 08:25:16',
                'updated_at' => '2022-01-31 11:27:16',
            ),
            1 => 
            array (
                'id' => 2,
                'subcategory_name_en' => 'Carleton Breitenberg Sr.',
                'subcategory_name_bn' => '男士时尚配饰',
                'subcategory_slug_en' => 'carleton-breitenberg-sr',
                'subcategory_slug_bn' => 'carleton-breitenberg-sr',
                'category_id' => 1,
                'created_at' => '2022-01-28 08:25:16',
                'updated_at' => '2022-01-31 11:28:17',
            ),
            2 => 
            array (
                'id' => 3,
                'subcategory_name_en' => 'Eugenia Parker',
                'subcategory_name_bn' => '女装',
                'subcategory_slug_en' => 'eugenia-parker',
                'subcategory_slug_bn' => 'eugenia-parker',
                'category_id' => 1,
                'created_at' => '2022-01-28 08:25:16',
                'updated_at' => '2022-01-31 11:31:28',
            ),
            3 => 
            array (
                'id' => 4,
                'subcategory_name_en' => 'Jacklyn King',
                'subcategory_name_bn' => '儿童服',
                'subcategory_slug_en' => 'jacklyn-king',
                'subcategory_slug_bn' => 'jacklyn-king',
                'category_id' => 1,
                'created_at' => '2022-01-28 08:25:16',
                'updated_at' => '2022-01-31 11:31:43',
            ),
            4 => 
            array (
                'id' => 5,
                'subcategory_name_en' => 'Anastasia Welch II',
                'subcategory_name_bn' => '结婚礼服',
                'subcategory_slug_en' => 'anastasia-welch-ii',
                'subcategory_slug_bn' => 'anastasia-welch-ii',
                'category_id' => 1,
                'created_at' => '2022-01-28 08:25:16',
                'updated_at' => '2022-01-31 11:33:06',
            ),
            5 => 
            array (
                'id' => 6,
                'subcategory_name_en' => '',
                'subcategory_name_bn' => '区图',
                'subcategory_slug_en' => '',
                'subcategory_slug_bn' => 'book',
                'category_id' => 4,
                'created_at' => '2022-01-31 12:28:16',
                'updated_at' => '2022-01-31 12:28:16',
            ),
            6 => 
            array (
                'id' => 7,
                'subcategory_name_en' => '',
                'subcategory_name_bn' => '文具',
                'subcategory_slug_en' => '',
                'subcategory_slug_bn' => 'stationery',
                'category_id' => 4,
                'created_at' => '2022-01-31 12:28:50',
                'updated_at' => '2022-01-31 12:28:50',
            ),
        ));
        
        
    }
}