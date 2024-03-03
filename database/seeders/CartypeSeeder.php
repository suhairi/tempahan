<?php

namespace Database\Seeders;

use App\Models\CarType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CartypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CarType::create(['name' => strtoupper('sedan')]);
        CarType::create(['name' => strtoupper('suv')]);
        CarType::create(['name' => strtoupper('4wd')]);
        CarType::create(['name' => strtoupper('lori')]);
        CarType::create(['name' => strtoupper('van')]);
    }
}
