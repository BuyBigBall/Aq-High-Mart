<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
class ShipStatesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();

        \DB::table('ship_states')->truncate();
        
        \DB::table('ship_states')->insert(array (
            0 => 
            array (
                'id' => 1,
                'division_id' => 1,
                'district_id' => 1,
                'state_name' => '东城区',
                'created_at' => '2022-02-04 17:44:46',
                'updated_at' => '2022-02-04 17:44:46',
            ),
            1 => 
            array (
                'id' => 2,
                'division_id' => 1,
                'district_id' => 1,
                'state_name' => '西城区',
                'created_at' => '2022-02-04 17:44:46',
                'updated_at' => '2022-02-04 17:44:46',
            ),
            2 => 
            array (
                'id' => 3,
                'division_id' => 1,
                'district_id' => 1,
                'state_name' => '朝阳区',
                'created_at' => '2022-02-04 17:44:46',
                'updated_at' => '2022-02-04 17:44:46',
            ),
            3 => 
            array (
                'id' => 4,
                'division_id' => 1,
                'district_id' => 1,
                'state_name' => '丰台区',
                'created_at' => '2022-02-04 17:44:46',
                'updated_at' => '2022-02-04 17:44:46',
            ),
            4 => 
            array (
                'id' => 5,
                'division_id' => 1,
                'district_id' => 1,
                'state_name' => '石景山区',
                'created_at' => '2022-02-04 17:44:46',
                'updated_at' => '2022-02-04 17:44:46',
            ),
            5 => 
            array (
                'id' => 6,
                'division_id' => 1,
                'district_id' => 1,
                'state_name' => '海淀区',
                'created_at' => '2022-02-04 17:44:46',
                'updated_at' => '2022-02-04 17:44:46',
            ),
            6 => 
            array (
                'id' => 7,
                'division_id' => 1,
                'district_id' => 1,
                'state_name' => '门头沟区',
                'created_at' => '2022-02-04 17:44:46',
                'updated_at' => '2022-02-04 17:44:46',
            ),
            7 => 
            array (
                'id' => 8,
                'division_id' => 1,
                'district_id' => 1,
                'state_name' => '房山区',
                'created_at' => '2022-02-04 17:44:46',
                'updated_at' => '2022-02-04 17:44:46',
            ),
            8 => 
            array (
                'id' => 9,
                'division_id' => 1,
                'district_id' => 1,
                'state_name' => '通州区',
                'created_at' => '2022-02-04 17:44:46',
                'updated_at' => '2022-02-04 17:44:46',
            ),
            9 => 
            array (
                'id' => 10,
                'division_id' => 1,
                'district_id' => 1,
                'state_name' => '顺义区',
                'created_at' => '2022-02-04 17:44:46',
                'updated_at' => '2022-02-04 17:44:46',
            ),
            10 => 
            array (
                'id' => 11,
                'division_id' => 1,
                'district_id' => 1,
                'state_name' => '昌平区',
                'created_at' => '2022-02-04 17:44:46',
                'updated_at' => '2022-02-04 17:44:46',
            ),
            11 => 
            array (
                'id' => 12,
                'division_id' => 1,
                'district_id' => 1,
                'state_name' => '大兴区',
                'created_at' => '2022-02-04 17:44:46',
                'updated_at' => '2022-02-04 17:44:46',
            ),
            12 => 
            array (
                'id' => 13,
                'division_id' => 1,
                'district_id' => 1,
                'state_name' => '怀柔区',
                'created_at' => '2022-02-04 17:44:46',
                'updated_at' => '2022-02-04 17:44:46',
            ),
            13 => 
            array (
                'id' => 14,
                'division_id' => 1,
                'district_id' => 1,
                'state_name' => '平谷区',
                'created_at' => '2022-02-04 17:44:46',
                'updated_at' => '2022-02-04 17:44:46',
            ),
            14 => 
            array (
                'id' => 15,
                'division_id' => 1,
                'district_id' => 1,
                'state_name' => '密云区',
                'created_at' => '2022-02-04 17:44:46',
                'updated_at' => '2022-02-04 17:44:46',
            ),
            15 => 
            array (
                'id' => 16,
                'division_id' => 1,
                'district_id' => 1,
                'state_name' => '延庆区',
                'created_at' => '2022-02-04 17:44:46',
                'updated_at' => '2022-02-04 17:44:46',
            ),
        ));
        
        Schema::enableForeignKeyConstraints();
    }
}