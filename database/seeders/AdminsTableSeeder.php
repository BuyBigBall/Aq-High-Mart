<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AdminsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('admins')->delete();
        
        \DB::table('admins')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'email_verified_at' => '2022-01-28 08:25:15',
                'password' => '$2y$10$WKnbSmNkSCeHBx4ciujpn.zLvc9Oz98SOYqzCMhtNjvUcgm/RXx/q',
                'remember_token' => 'ZZoutbeksKzr7r8ps7mxAUVDCFX2BCRAFVi16RGPZmcWqyAXDrWCo54QO4iV',
                'current_team_id' => NULL,
                'profile_photo_path' => NULL,
                'created_at' => '2022-01-28 08:25:15',
                'updated_at' => '2022-01-28 08:25:15',
            ),
        ));
        
        
    }
}