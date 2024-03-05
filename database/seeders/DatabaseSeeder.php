<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Driver;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();
        


        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call(PermissionSeeder::class);
        $this->call(RoleSeeder::class);        
        $this->call(UserSeeder::class);
        $this->call(CartypeSeeder::class);
        $this->call(CarbrandSeeder::class);
        $this->call(DriverSeeder::class);
        $this->call(VehicleSeeder::class);
    }
}

// DATABASE : madadb
// extracting data from the database to be transfer to tempahan database -> table staff.
// Issues with the sql are :-
// - resulting in truncated data due to data type inconsistency
// - 


// SELECT staff.nama, staff.staff_id, staff.no_kp, staff.no_tel,
// staff.tarikh_masuk, staff.tarikh_sah, staff.tarikh_pencen, staff.umur_bersara,
// staff.gaji_pokok,
// staff.connection, staff.speed_dial,
// bangsa.info_bangsa, agama.info_agama, jantina.info_jantina,
// bahagian.info_bhgn, cawangan.info_caw,
// gred.info_gred,
// gelaran.info_gelaran, status.status_desc
// FROM `staff`
// INNER JOIN bangsa
// 	ON staff.kod_bangsa = bangsa.kod_bangsa
// INNER JOIN agama
// 	ON staff.kod_agama = agama.kod_agama
// INNER JOIN jantina
// 	ON staff.kod_jantina = jantina.kod_jantina
// INNER JOIN bahagian
// 	ON staff.kod_bhgn_semasa = bahagian.kod_bhgn
// INNER JOIN cawangan
// 	ON staff.kod_caw_semasa = cawangan.kod_caw
// INNER JOIN jawatan
// 	ON staff.kod_jawatan_semasa = jawatan.kod_jawatan
// INNER JOIN gred
// 	ON staff.kod_gred_semasa = gred.kod_gred
// INNER JOIN gelaran
// 	ON staff.kod_gelaran_semasa = gelaran.kod_gelaran
// INNER JOIN status
// 	ON staff.status_code = status.status_code
// ;
