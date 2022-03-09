<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
class ShipDistrictsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        
        Schema::disableForeignKeyConstraints();
        \DB::table('ship_districts')->truncate();
        
        \DB::table('ship_districts')->insert(array (
            0 => 
            array (
                'id' => 1,
                'division_id' => 1,
                'district_name' => '市辖区',
                'created_at' => '2022-02-04 17:42:35',
                'updated_at' => '2022-02-04 17:42:35',
            ),
            1 => 
            array (
                'id' => 2,
                'division_id' => 2,
                'district_name' => '市辖区',
                'created_at' => '2022-02-04 17:43:00',
                'updated_at' => '2022-02-04 17:43:00',
            ),
            2 => 
            array (
                'id' => 3,
                'division_id' => 2,
                'district_name' => '县',
                'created_at' => '2022-02-04 17:43:11',
                'updated_at' => '2022-02-04 17:43:11',
            ),
        ));
        Schema::enableForeignKeyConstraints();
        
    }
}