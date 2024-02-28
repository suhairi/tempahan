<?php

namespace Database\Seeders;

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
            'name'      => 'Suhairi Abdul Hamid',
            'email'     => 'admin@admin.com',
            'password'  => bcrypt('password'),
            'email_verified_at' => now(),
        ]);
        $user->assignRole('Super Admin');

        $user = User::create([
            'name'      => 'Mohd Hazran bin Md Zuki',
            'email'     => 'hazran@mada.gov.my',
            'password'  => bcrypt('password'),
            'email_verified_at' => now(),
        ]);
        $user->assignRole('Super Admin');

        $user = User::create([
            'name'      => 'Juliana binti Abdul Sattar',
            'email'     => 'juliana@mada.gov.my',
            'password'  => bcrypt('password'),
            'email_verified_at' => now(),
        ]);
        $user->assignRole('Admin');

        $user = User::create([
            'name'      => 'Mohd Zuhdi bin Jamaludin',
            'email'     => 'zuhdi@mada.gov.my',
            'password'  => bcrypt('password'),
            'email_verified_at' => now(),
        ]);
        $user->assignRole('Admin');

        $user = User::create([
            'name'      => 'Nur Farah Amylia binti Zakri',
            'email'     => 'farahamylia1997@gmail.com',
            'password'  => bcrypt('password'),
            'email_verified_at' => now(),
        ]);
        $user->assignRole('Admin');

        $user = User::create([
            'name'      => 'Mohd Haiqal bin Shahardi',
            'email'     => 'haiqalshahardi@gmail.com',
            'password'  => bcrypt('password'),
            'email_verified_at' => now(),
        ]);
        $user->assignRole('Admin');

        

        

        
    }
}
