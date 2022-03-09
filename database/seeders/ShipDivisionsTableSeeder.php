<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
class ShipDivisionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        
        Schema::disableForeignKeyConstraints();
        \DB::table('ship_divisions')->truncate();
        
        \DB::table('ship_divisions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'division_name' => '北京',
                'created_at' => '2022-02-04 17:42:16',
                'updated_at' => '2022-02-04 17:42:16',
            ),
            1 => 
            array (
                'id' => 2,
                'division_name' => '上海',
                'created_at' => '2022-02-04 17:42:16',
                'updated_at' => '2022-02-04 17:42:16',
            ),
            2 => 
            array (
                'id' => 3,
                'division_name' => '天津',
                'created_at' => '2022-02-04 17:42:16',
                'updated_at' => '2022-02-04 17:42:16',
            ),
            3 => 
            array (
                'id' => 4,
                'division_name' => '重庆',
                'created_at' => '2022-02-04 17:42:16',
                'updated_at' => '2022-02-04 17:42:16',
            ),
            4 => 
            array (
                'id' => 5,
                'division_name' => '广东',
                'created_at' => '2022-02-04 17:42:16',
                'updated_at' => '2022-02-04 17:42:16',
            ),
            5 => 
            array (
                'id' => 6,
                'division_name' => '福建',
                'created_at' => '2022-02-04 17:42:16',
                'updated_at' => '2022-02-04 17:42:16',
            ),
            6 => 
            array (
                'id' => 7,
                'division_name' => '湖北',
                'created_at' => '2022-02-04 17:42:16',
                'updated_at' => '2022-02-04 17:42:16',
            ),
            7 => 
            array (
                'id' => 8,
                'division_name' => '湖南',
                'created_at' => '2022-02-04 17:42:16',
                'updated_at' => '2022-02-04 17:42:16',
            ),
            8 => 
            array (
                'id' => 9,
                'division_name' => '河北',
                'created_at' => '2022-02-04 17:42:16',
                'updated_at' => '2022-02-04 17:42:16',
            ),
            9 => 
            array (
                'id' => 10,
                'division_name' => '河南',
                'created_at' => '2022-02-04 17:42:16',
                'updated_at' => '2022-02-04 17:42:16',
            ),
            10 => 
            array (
                'id' => 11,
                'division_name' => '山西',
                'created_at' => '2022-02-04 17:42:16',
                'updated_at' => '2022-02-04 17:42:16',
            ),
            11 => 
            array (
                'id' => 12,
                'division_name' => '陕西',
                'created_at' => '2022-02-04 17:42:16',
                'updated_at' => '2022-02-04 17:42:16',
            ),
            12 => 
            array (
                'id' => 13,
                'division_name' => '江苏',
                'created_at' => '2022-02-04 17:42:16',
                'updated_at' => '2022-02-04 17:42:16',
            ),
            13 => 
            array (
                'id' => 14,
                'division_name' => '浙江',
                'created_at' => '2022-02-04 17:42:16',
                'updated_at' => '2022-02-04 17:42:16',
            ),
            14 => 
            array (
                'id' => 15,
                'division_name' => '安徽',
                'created_at' => '2022-02-04 17:42:16',
                'updated_at' => '2022-02-04 17:42:16',
            ),
            15 => 
            array (
                'id' => 16,
                'division_name' => '江西',
                'created_at' => '2022-02-04 17:42:16',
                'updated_at' => '2022-02-04 17:42:16',
            ),
            16 => 
            array (
                'id' => 17,
                'division_name' => '山东',
                'created_at' => '2022-02-04 17:42:16',
                'updated_at' => '2022-02-04 17:42:16',
            ),
            17 => 
            array (
                'id' => 18,
                'division_name' => '辽宁',
                'created_at' => '2022-02-04 17:42:16',
                'updated_at' => '2022-02-04 17:42:16',
            ),
            18 => 
            array (
                'id' => 19,
                'division_name' => '吉林',
                'created_at' => '2022-02-04 17:42:16',
                'updated_at' => '2022-02-04 17:42:16',
            ),
            19 => 
            array (
                'id' => 20,
                'division_name' => '黑龙江',
                'created_at' => '2022-02-04 17:42:16',
                'updated_at' => '2022-02-04 17:42:16',
            ),
            20 => 
            array (
                'id' => 21,
                'division_name' => '四川',
                'created_at' => '2022-02-04 17:42:16',
                'updated_at' => '2022-02-04 17:42:16',
            ),
            21 => 
            array (
                'id' => 22,
                'division_name' => '贵州',
                'created_at' => '2022-02-04 17:42:16',
                'updated_at' => '2022-02-04 17:42:16',
            ),
            22 => 
            array (
                'id' => 23,
                'division_name' => '云南',
                'created_at' => '2022-02-04 17:42:16',
                'updated_at' => '2022-02-04 17:42:16',
            ),
            23 => 
            array (
                'id' => 24,
                'division_name' => '西藏',
                'created_at' => '2022-02-04 17:42:16',
                'updated_at' => '2022-02-04 17:42:16',
            ),
            24 => 
            array (
                'id' => 25,
                'division_name' => '甘肃',
                'created_at' => '2022-02-04 17:42:16',
                'updated_at' => '2022-02-04 17:42:16',
            ),
            25 => 
            array (
                'id' => 26,
                'division_name' => '青海',
                'created_at' => '2022-02-04 17:42:16',
                'updated_at' => '2022-02-04 17:42:16',
            ),
            26 => 
            array (
                'id' => 27,
                'division_name' => '宁夏',
                'created_at' => '2022-02-04 17:42:16',
                'updated_at' => '2022-02-04 17:42:16',
            ),
            27 => 
            array (
                'id' => 28,
                'division_name' => '新疆',
                'created_at' => '2022-02-04 17:42:16',
                'updated_at' => '2022-02-04 17:42:16',
            ),
            28 => 
            array (
                'id' => 29,
                'division_name' => '内蒙古',
                'created_at' => '2022-02-04 17:42:16',
                'updated_at' => '2022-02-04 17:42:16',
            ),
            29 => 
            array (
                'id' => 30,
                'division_name' => '广西',
                'created_at' => '2022-02-04 17:42:16',
                'updated_at' => '2022-02-04 17:42:16',
            ),
            30 => 
            array (
                'id' => 31,
                'division_name' => '海南',
                'created_at' => '2022-02-04 17:42:16',
                'updated_at' => '2022-02-04 17:42:16',
            ),
            31 => 
            array (
                'id' => 32,
                'division_name' => '香港',
                'created_at' => '2022-02-04 17:42:16',
                'updated_at' => '2022-02-04 17:42:16',
            ),
            32 => 
            array (
                'id' => 33,
                'division_name' => '澳门',
                'created_at' => '2022-02-04 17:42:16',
                'updated_at' => '2022-02-04 17:42:16',
            ),
            33 => 
            array (
                'id' => 34,
                'division_name' => '台湾',
                'created_at' => '2022-02-04 17:42:16',
                'updated_at' => '2022-02-04 17:42:16',
            ),
        ));
        
        Schema::enableForeignKeyConstraints();
    }
}