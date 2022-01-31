<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Category::factory()->count(50)->create();

        $category_list_en = [
            'Clothing & Fashion',
            'Healthcare & Hygiene',
            'Shoes & Bags',
            'Books & Stationary',
            'Computer & Accessories',
            'Consumer Electronics',
            'Security Systems & Accessories',
            'Mobile & Accessories'
        ];

        $category_list_bn = [
            '服装和时尚配饰',
            '医疗保健和卫生',
            '鞋子和包包',
            '图书和文具',
            '电脑及配件',
            '消费类电子产品',
            '安全系统和配件',
            '手机及配件'
        ];

        for($i =0; $i<count($category_list_en); $i++) {
            Category::create([
                'category_name_en' => $category_list_en[$i],
                'category_name_bn' => $category_list_bn[$i],
                'category_slug_en' => Str::slug($category_list_en[$i]),
                'category_slug_bn' => Str::slug($category_list_bn[$i]),
                'category_icon' => 'fa fa-shopping-bag',
            ]);
        }
    }
}
