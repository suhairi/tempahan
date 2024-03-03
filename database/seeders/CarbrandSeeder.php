<?php

namespace Database\Seeders;

use App\Models\CarBrand;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CarbrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CarBrand::create(['name' => strtoupper('nissan')]);
        CarBrand::create(['name' => strtoupper('honda')]);
        CarBrand::create(['name' => strtoupper('toyota')]);
        CarBrand::create(['name' => strtoupper('proton')]);
        CarBrand::create(['name' => strtoupper('lexus')]);
    }
}
