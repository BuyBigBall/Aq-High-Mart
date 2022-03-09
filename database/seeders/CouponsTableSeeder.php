<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
class CouponsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();

        //\DB::table('coupons')->delete();
        \DB::table('coupons')->truncate();
        
        \DB::table('coupons')->insert(array (
            0 => 
            array (
                'id' => 1,
                'coupon_name' => '春节coupon',
                'coupon_discount' => 19,
                'coupon_validity' => '2022-2-15',
                'coupon_status' => 1,
                'created_at' => '2022-02-03 07:24:24',
                'updated_at' => '2022-02-03 07:26:20',
            ),
            1 => 
            array (
                'id' => 2,
                'coupon_name' => '春节coupon',
                'coupon_discount' => 20,
                'coupon_validity' => '2022-2-23',
                'coupon_status' => 1,
                'created_at' => '2022-02-03 07:24:58',
                'updated_at' => '2022-02-13 13:52:09',
            ),
        ));
        
        Schema::enableForeignKeyConstraints();
    }
}