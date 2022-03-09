<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
class SubSubCategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();

        \DB::table('sub_sub_categories')->truncate();
        
        \DB::table('sub_sub_categories')->insert(array (
            0 => 
            array (
                'id' => 1,
                'category_id' => 1,
                'subcategory_id' => 1,
                'subsubcategory_name_en' => '',
                'subsubcategory_name_bn' => 'Kenyatta Mayer',
                'subsubcategory_slug_en' => '',
                'subsubcategory_slug_bn' => 'kenyatta-mayer',
                'created_at' => '2022-01-28 08:25:16',
                'updated_at' => '2022-01-31 15:06:02',
            ),
            1 => 
            array (
                'id' => 2,
                'category_id' => 1,
                'subcategory_id' => 1,
                'subsubcategory_name_en' => 'Ansley Gorczany',
                'subsubcategory_name_bn' => 'Mr. Jameson Reynolds PhD',
                'subsubcategory_slug_en' => 'ansley-gorczany',
                'subsubcategory_slug_bn' => 'mr-jameson-reynolds-phd',
                'created_at' => '2022-01-28 08:25:16',
                'updated_at' => '2022-01-28 08:25:16',
            ),
            2 => 
            array (
                'id' => 3,
                'category_id' => 1,
                'subcategory_id' => 1,
                'subsubcategory_name_en' => 'Prof. Derrick Lang',
                'subsubcategory_name_bn' => 'Meagan Christiansen',
                'subsubcategory_slug_en' => 'prof-derrick-lang',
                'subsubcategory_slug_bn' => 'meagan-christiansen',
                'created_at' => '2022-01-28 08:25:16',
                'updated_at' => '2022-01-28 08:25:16',
            ),
            3 => 
            array (
                'id' => 4,
                'category_id' => 1,
                'subcategory_id' => 1,
                'subsubcategory_name_en' => 'Kenyatta Nitzsche',
                'subsubcategory_name_bn' => 'Alayna Carter',
                'subsubcategory_slug_en' => 'kenyatta-nitzsche',
                'subsubcategory_slug_bn' => 'alayna-carter',
                'created_at' => '2022-01-28 08:25:16',
                'updated_at' => '2022-01-28 08:25:16',
            ),
            4 => 
            array (
                'id' => 5,
                'category_id' => 1,
                'subcategory_id' => 1,
                'subsubcategory_name_en' => 'Prof. Royce Ziemann I',
                'subsubcategory_name_bn' => 'Issac Orn',
                'subsubcategory_slug_en' => 'prof-royce-ziemann-i',
                'subsubcategory_slug_bn' => 'issac-orn',
                'created_at' => '2022-01-28 08:25:16',
                'updated_at' => '2022-01-28 08:25:16',
            ),
            5 => 
            array (
                'id' => 6,
                'category_id' => 4,
                'subcategory_id' => 6,
                'subsubcategory_name_en' => '',
                'subsubcategory_name_bn' => '子子蹄片',
                'subsubcategory_slug_en' => '',
                'subsubcategory_slug_bn' => 'subsubcategory',
                'created_at' => '2022-01-31 15:11:01',
                'updated_at' => '2022-01-31 15:11:01',
            ),
        ));
        
        Schema::enableForeignKeyConstraints();
    }
}