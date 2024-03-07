<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::create([
            'name'      => strtoupper('Suhairi Abdul Hamid'),
            'email'     => 'admin@admin.com',
            'staffid'   => '3374',
            'password'  => bcrypt('password'),
            'email_verified_at' => now(),
        ]);
        $user->assignRole('Super Admin');

        $user = User::create([
            'name'      => strtoupper('Mohd Hazran bin Md Zuki'),
            'email'     => 'hazran@mada.gov.my',
            'staffid'   => '3834',
            'password'  => bcrypt('password'),
            'email_verified_at' => now(),
        ]);
        $user->assignRole('Super Admin');

        $user = User::create([
            'name'      => strtoupper('Juliana binti Abdul Sattar'),
            'email'     => 'juliana@mada.gov.my',
            'staffid'   => '2419',
            'password'  => bcrypt('password'),
            'email_verified_at' => now(),
        ]);
        $user->assignRole('Admin');

        $user = User::create([
            'name'      => strtoupper('Mohd Zuhdi bin Jamaludin'),
            'email'     => 'zuhdi@mada.gov.my',
            'staffid'   => '3703',
            'password'  => bcrypt('password'),
            'email_verified_at' => now(),
        ]);
        $user->assignRole('Admin');

        $user = User::create([
            'name'      => strtoupper('Nur Farah Amylia binti Zakri'),
            'email'     => 'farahamylia1997@gmail.com',
            'staffid'   => '4052',
            'password'  => bcrypt('password'),
            'email_verified_at' => now(),
        ]);
        $user->assignRole('Admin');

        $user = User::create([
            'name'      => strtoupper('Mohd Haiqal bin Shahardi'),
            'email'     => 'haiqalshahardi@gmail.com',
            'staffid'   => '4020',
            'password'  => bcrypt('password'),
            'email_verified_at' => now(),
        ]);
        $user->assignRole('Admin');

        
    }
}
