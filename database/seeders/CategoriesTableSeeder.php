<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
class CategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        
        Schema::disableForeignKeyConstraints();
        //\DB::table('categories')->delete();
        \DB::table('categories')->truncate();
        
        \DB::table('categories')->insert(array (
            0 => 
            array (
                'id' => 1,
                'category_name_en' => 'Clothing & Fashion',
                'category_name_bn' => '服装和时尚配饰',
                'category_slug_en' => '',
                'category_slug_bn' => 'clothing-fashion',
                'category_icon' => 'fa fa-shopping-bag',
                'category_image' => 'upload/categories/1723468164060067.jpg',
                'created_at' => '2022-01-28 08:25:16',
                'updated_at' => '2022-01-31 11:08:43',
            ),
            1 => 
            array (
                'id' => 2,
                'category_name_en' => 'Healthcare & Hygiene',
                'category_name_bn' => '医疗保健和卫生',
                'category_slug_en' => 'healthcare-hygiene',
                'category_slug_bn' => 'swasthzseba-oo-swasthzbidhi',
                'category_icon' => 'fa fa-shopping-bag',
                'category_image' => 'https://source.unsplash.com/random',
                'created_at' => '2022-01-28 08:25:16',
                'updated_at' => '2022-01-28 08:25:16',
            ),
            2 => 
            array (
                'id' => 3,
                'category_name_en' => 'Shoes & Bags',
                'category_name_bn' => '鞋子和包包',
                'category_slug_en' => 'shoes-bags',
                'category_slug_bn' => 'juto-ebng-bzag',
                'category_icon' => 'fa fa-shopping-bag',
                'category_image' => 'https://source.unsplash.com/random',
                'created_at' => '2022-01-28 08:25:16',
                'updated_at' => '2022-01-28 08:25:16',
            ),
            3 => 
            array (
                'id' => 4,
                'category_name_en' => '',
                'category_name_bn' => '图书和文具',
                'category_slug_en' => '',
                'category_slug_bn' => 'bi-oo-stesnari',
                'category_icon' => 'fa fa-shopping-bag',
                'category_image' => 'upload/categories/1723660401646053.jpg',
                'created_at' => '2022-01-28 08:25:16',
                'updated_at' => '2022-02-02 14:04:15',
            ),
            4 => 
            array (
                'id' => 5,
                'category_name_en' => 'Computer & Accessories',
                'category_name_bn' => '电脑及配件',
                'category_slug_en' => 'computer-accessories',
                'category_slug_bn' => 'kmpiutar-oo-anushangoik',
                'category_icon' => 'fa fa-shopping-bag',
                'category_image' => 'https://source.unsplash.com/random',
                'created_at' => '2022-01-28 08:25:16',
                'updated_at' => '2022-01-28 08:25:16',
            ),
            5 => 
            array (
                'id' => 6,
                'category_name_en' => 'Consumer Electronics',
                'category_name_bn' => '消费类电子产品',
                'category_slug_en' => 'consumer-electronics',
                'category_slug_bn' => 'knjiumar-ilektrniks',
                'category_icon' => 'fa fa-shopping-bag',
                'category_image' => 'https://source.unsplash.com/random',
                'created_at' => '2022-01-28 08:25:16',
                'updated_at' => '2022-01-28 08:25:16',
            ),
            6 => 
            array (
                'id' => 7,
                'category_name_en' => 'Security Systems & Accessories',
                'category_name_bn' => '安全系统和配件',
                'category_slug_en' => 'security-systems-accessories',
                'category_slug_bn' => 'surksha-sistem-oo-anushangoik',
                'category_icon' => 'fa fa-shopping-bag',
                'category_image' => 'https://source.unsplash.com/random',
                'created_at' => '2022-01-28 08:25:16',
                'updated_at' => '2022-01-28 08:25:16',
            ),
            7 => 
            array (
                'id' => 8,
                'category_name_en' => 'Mobile & Accessories',
                'category_name_bn' => '手机及配件',
                'category_slug_en' => 'mobile-accessories',
                'category_slug_bn' => 'mobail-oo-anushangoik',
                'category_icon' => 'fa fa-shopping-bag',
                'category_image' => 'https://source.unsplash.com/random',
                'created_at' => '2022-01-28 08:25:16',
                'updated_at' => '2022-01-28 08:25:16',
            ),
        ));
        
        Schema::enableForeignKeyConstraints();
    }
}