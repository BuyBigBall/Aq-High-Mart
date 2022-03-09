<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
class OptionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();

        \DB::table('options')->truncate();
        
        \DB::table('options')->insert(array (
            0 => 
            array (
                'id' => 1,
                'key' => 'register_point',
                'val' => '11',
                'created_at' => '2022-02-12 01:19:12',
                'updated_at' => '2022-02-15 09:21:05',
            ),
            1 => 
            array (
                'id' => 5,
                'key' => 'login_point',
                'val' => '12',
                'created_at' => '2022-02-20 18:03:39',
                'updated_at' => '2022-02-20 18:03:39',
            ),
            2 => 
            array (
                'id' => 6,
                'key' => 'buy_point',
                'val' => '13',
                'created_at' => '2022-02-20 18:03:39',
                'updated_at' => '2022-02-20 18:03:39',
            ),
        ));
        
        Schema::enableForeignKeyConstraints();
    }
}