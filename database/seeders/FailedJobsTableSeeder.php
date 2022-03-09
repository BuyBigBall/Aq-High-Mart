<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
class FailedJobsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        
        Schema::disableForeignKeyConstraints();
        //\DB::table('failed_jobs')->delete();
        \DB::table('failed_jobs')->truncate();
        Schema::enableForeignKeyConstraints();
        
    }
}