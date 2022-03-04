<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ImagesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('images')->delete();
        
        \DB::table('images')->insert(array (
            0 => 
            array (
                'id' => 2,
                'product_id' => 33,
                'photo_name' => 'upload/products/multi_images/1723464472603795.png',
                'created_at' => '2022-01-31 10:09:36',
                'updated_at' => '2022-01-31 10:10:03',
            ),
            1 => 
            array (
                'id' => 3,
                'product_id' => 33,
                'photo_name' => 'upload/products/multi_images/1723464473183603.png',
                'created_at' => '2022-01-31 10:10:03',
                'updated_at' => '2022-01-31 10:10:03',
            ),
            2 => 
            array (
                'id' => 4,
                'product_id' => 34,
                'photo_name' => 'upload/products/multi_images/1723662435088797.jpg',
                'created_at' => '2022-02-02 14:35:54',
                'updated_at' => '2022-02-02 14:36:34',
            ),
            3 => 
            array (
                'id' => 5,
                'product_id' => 34,
                'photo_name' => 'upload/products/multi_images/1723663436316216.jpg',
                'created_at' => '2022-02-02 14:36:34',
                'updated_at' => '2022-02-02 14:52:29',
            ),
        ));
        
        
    }
}