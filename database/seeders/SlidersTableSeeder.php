<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
class SlidersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();

        \DB::table('sliders')->truncate();
        
        \DB::table('sliders')->insert(array (
            0 => 
            array (
                'id' => 1,
                'slider_name' => '滑块1',
                'slider_title' => NULL,
                'slider_description' => NULL,
                'slider_image' => 'upload/sliders/1723722781021894.png',
                'slider_status' => 1,
                'created_at' => '2022-02-03 06:35:45',
                'updated_at' => '2022-02-03 06:35:45',
            ),
            1 => 
            array (
                'id' => 2,
                'slider_name' => '滑块2',
                'slider_title' => NULL,
                'slider_description' => NULL,
                'slider_image' => 'upload/sliders/1723722801476571.png',
                'slider_status' => 1,
                'created_at' => '2022-02-03 06:36:04',
                'updated_at' => '2022-02-03 06:36:04',
            ),
        ));
        Schema::enableForeignKeyConstraints();
        
    }
}