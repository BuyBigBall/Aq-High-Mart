<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
class WishlistsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        
        Schema::disableForeignKeyConstraints();
        \DB::table('wishlists')->truncate();
        Schema::enableForeignKeyConstraints();
        
    }
}