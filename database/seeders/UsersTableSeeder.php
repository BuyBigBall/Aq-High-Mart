<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'yakov zakharov',
                'email' => 'user@gmail.com',
                'email_verified_at' => '2022-01-28 08:25:15',
                'password' => '$2y$10$F9.c5v/VMgBs2MUtc1U.CeTGQZNNMFjBASGbH9qV8GPP1UnnEuJ2C',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'phone_number' => '5152463651',
                'remember_token' => 'xDVM6u9OAqLppYczGfHdXz9aEszk875G4FfxbUeBW5MfdYMi7p1R6c3aW1qt',
                'current_team_id' => NULL,
                'profile_photo_path' => '202202021749.png',
                'role' => 'user',
                'money' => 16.0,
                'point' => 23.0,
                'status' => 1,
                'created_at' => '2022-01-28 08:25:15',
                'updated_at' => '2022-02-21 02:28:58',
            ),
            1 => 
            array (
                'id' => 11,
                'name' => 'werwerw',
                'email' => 'user232@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$FF81n1.GR4Hr3JsaCyuEiuxfTjujed9MkD8qaJQfxyGQrleOXyD2S',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'phone_number' => '1231231',
                'remember_token' => NULL,
                'current_team_id' => NULL,
                'profile_photo_path' => NULL,
                'role' => 'user',
                'money' => 130.0,
                'point' => 23.0,
                'status' => 1,
                'created_at' => '2022-02-21 03:07:32',
                'updated_at' => '2022-02-22 00:47:38',
            ),
            2 => 
            array (
                'id' => 12,
                'name' => 'yakov zakharov3453',
                'email' => 'user557675@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$f3bPTcNJYsLUYVbdT34sd.p3DO2wHaIp/bXKJ86sHrIHo57YiPNaC',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'phone_number' => '5152463651',
                'remember_token' => NULL,
                'current_team_id' => NULL,
                'profile_photo_path' => NULL,
                'role' => NULL,
                'money' => 0.0,
                'point' => 23.0,
                'status' => 1,
                'created_at' => '2022-02-21 03:22:21',
                'updated_at' => '2022-02-21 03:22:21',
            ),
        ));
        
        
    }
}