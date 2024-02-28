<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // This role is for System Administrator
        Role::create([
            'name'          => 'Super Admin',
            'guard_name'    => 'web',
        ]);

        //This role is for the admin of the system
        Role::create([
            'name'          => 'Admin',
            'guard_name'    => 'web',
        ]);

        // This role is for the approver
        Role::create([
            'name'          => 'Approver',
            'guard_name'    => 'web',
        ]);

        // This role is for CC
        Role::create([
            'name'          => 'Clerk',
            'guard_name'    => 'web',
        ]);

        
    }
}
