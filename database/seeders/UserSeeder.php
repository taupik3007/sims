<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $superadmin = User::create([
            'name' => 'super admin',
            'nis' => "10521053",
            'email' => 'superadmin@gmail.com',
            'password' => bcrypt('11111111')

        ]);
        $superadmin->assignRole('superAdmin');
        $admin = User::create([
            'name' => 'admin',
            'nis' => "10521054",
            'email' => 'admin@gmail.com',
            'password' => bcrypt('11111111')

        ]);
        $superadmin->assignRole('admin');
        $admin = User::create([
            'name' =>'user',
            'nis' => "10521055",
            'email' => 'user@gmail.com',
            'password' => bcrypt('11111111')

        ]);
        $superadmin->assignRole('user');
    }
}
