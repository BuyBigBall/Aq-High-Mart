<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
class OrdersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();

        \DB::table('orders')->truncate();
        
        \DB::table('orders')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => 1,
                'division_id' => 1,
                'district_id' => 1,
                'state_id' => 1,
                'name' => 'yakov zakharov',
                'email' => 'yasha3651@mail.ru',
                'phone' => '5152463651',
                'post_code' => 123456,
                'notes' => NULL,
                'address' => 'street',
                'payment_type' => 'card_1KPTPo2eZvKYlo2CdiH9MvAW',
                'payment_method' => 'Stripe',
                'transaction_id' => 'txn_3KPTU72eZvKYlo2C1fKSpAWc',
                'currency' => 'usd',
                'amount' => 3496.0,
                'order_number' => '61fd423c4f701',
                'invoice_number' => 'AAF87622255',
                'order_date' => '04 February 2022',
                'order_month' => 'February',
                'order_year' => '2022',
                'confirmed_date' => NULL,
                'processing_date' => NULL,
                'picked_date' => NULL,
                'shipped_date' => NULL,
                'delivered_date' => NULL,
                'cancel_date' => NULL,
                'return_date' => NULL,
                'return_reason' => NULL,
                'status' => 'pending',
                'created_at' => '2022-02-04 15:11:58',
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'user_id' => 1,
                'division_id' => 1,
                'district_id' => 1,
                'state_id' => 1,
                'name' => 'yakov zakharov',
                'email' => 'yasha3651@mail.ru',
                'phone' => '5152463651',
                'post_code' => 123456,
                'notes' => NULL,
                'address' => 'street',
                'payment_type' => 'card_1KPTap2eZvKYlo2C4Mbx4pLJ',
                'payment_method' => 'Stripe',
                'transaction_id' => 'txn_3KPTar2eZvKYlo2C0jhu1zUG',
                'currency' => 'usd',
                'amount' => 3496.0,
                'order_number' => '61fd43de4d3be',
                'invoice_number' => 'AAF47598136',
                'order_date' => '04 February 2022',
                'order_month' => 'February',
                'order_year' => '2022',
                'confirmed_date' => '05 February 2022',
                'processing_date' => '05 February 2022',
                'picked_date' => '05 February 2022',
                'shipped_date' => '05 February 2022',
                'delivered_date' => '05 February 2022',
                'cancel_date' => NULL,
                'return_date' => NULL,
                'return_reason' => NULL,
                'status' => 'delivered',
                'created_at' => '2022-02-04 15:18:56',
                'updated_at' => '2022-02-05 01:48:52',
            ),
        ));
        Schema::enableForeignKeyConstraints();
        
    }
}