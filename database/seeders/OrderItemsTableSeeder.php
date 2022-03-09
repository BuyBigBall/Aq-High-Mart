<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
class OrderItemsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();

        \DB::table('order_items')->truncate();
        
        \DB::table('order_items')->insert(array (
            0 => 
            array (
                'id' => 1,
                'order_id' => 2,
                'product_id' => 34,
                'color' => '红色',
                'size' => '中的',
                'qty' => 2,
                'unit_price' => 1748.0,
                'created_at' => '2022-02-04 15:18:56',
                'updated_at' => '2022-02-04 15:18:56',
            ),
        ));
        
        Schema::enableForeignKeyConstraints();
    }
}