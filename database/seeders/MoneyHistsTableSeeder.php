<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MoneyHistsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('money_hists')->delete();
        
        \DB::table('money_hists')->insert(array (
            0 => 
            array (
                'id' => 2,
                'user_id' => 1,
                'money_type' => 2,
                'deal_type' => 7,
                'deal_id' => 0,
                'content' => 'create user',
                'money' => 12.0,
                'created_at' => '2022-02-21 02:18:32',
                'updated_at' => '2022-02-21 00:18:32',
            ),
            1 => 
            array (
                'id' => 8,
                'user_id' => 1,
                'money_type' => 2,
                'deal_type' => 8,
                'deal_id' => 0,
                'content' => 'login',
                'money' => 11.0,
                'created_at' => '2022-02-21 02:28:58',
                'updated_at' => '2022-02-21 02:28:58',
            ),
            2 => 
            array (
                'id' => 9,
                'user_id' => 11,
                'money_type' => 2,
                'deal_type' => 7,
                'deal_id' => 0,
                'content' => 'create user',
                'money' => 11.0,
                'created_at' => '2022-02-21 03:07:32',
                'updated_at' => '2022-02-21 03:07:32',
            ),
            3 => 
            array (
                'id' => 10,
                'user_id' => 11,
                'money_type' => 2,
                'deal_type' => 8,
                'deal_id' => 0,
                'content' => 'login user',
                'money' => 12.0,
                'created_at' => '2022-02-21 03:07:32',
                'updated_at' => '2022-02-21 03:07:32',
            ),
            4 => 
            array (
                'id' => 11,
                'user_id' => 12,
                'money_type' => 2,
                'deal_type' => 7,
                'deal_id' => 0,
                'content' => 'create user',
                'money' => 11.0,
                'created_at' => '2022-02-21 03:22:21',
                'updated_at' => '2022-02-21 03:22:21',
            ),
            5 => 
            array (
                'id' => 12,
                'user_id' => 12,
                'money_type' => 2,
                'deal_type' => 8,
                'deal_id' => 0,
                'content' => 'login user',
                'money' => 12.0,
                'created_at' => '2022-02-21 03:22:21',
                'updated_at' => '2022-02-21 03:22:21',
            ),
        ));
        
        
    }
}