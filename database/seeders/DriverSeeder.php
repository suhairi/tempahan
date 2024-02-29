<?php

namespace Database\Seeders;

use App\Models\Driver;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DriverSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Driver::create(['name'  => 'Zakaria Ahmad', 'phone' => '0103933172', 'pergerakan' => 'VIP']);
        Driver::create(['name'  => 'Ahmad Fahmi Ibrahim', 'phone' => '0194562510', 'pergerakan' => 'VIP']);
        Driver::create(['name'  => 'Mohd. Aizam Azmi', 'phone' => '0125784960', 'pergerakan' => 'VIP']);
        Driver::create(['name'  => 'Mohamad Zakaria Yop', 'phone' => '0194269905', 'pergerakan' => 'VIP']);
        Driver::create(['name'  => 'Abu Seman Ishak', 'phone' => '01164452398', 'pergerakan' => 'Bebas']);
        Driver::create(['name'  => 'Hamzah Ishak', 'phone' => '0133461134', 'pergerakan' => 'Bebas']);
        Driver::create(['name'  => 'Zulhanim Hashim', 'phone' => '0175055186', 'pergerakan' => 'Bebas']);
        Driver::create(['name'  => 'Muhammad Hafdzi Husni', 'phone' => '01126862742', 'pergerakan' => 'Bebas']);
        Driver::create(['name'  => 'Suhardi Bin Idrus', 'phone' => '0166784734', 'pergerakan' => 'Bebas']);
        Driver::create(['name'  => 'Andalan Azali', 'phone' => '0125131900', 'pergerakan' => 'Dalam']);
        Driver::create(['name'  => 'Mohamad Akmal Zikri', 'phone' => '0175483136', 'pergerakan' => 'Bebas']);
        Driver::create(['name'  => 'Muhammad Akmal Hassan', 'phone' => '0174180384', 'pergerakan' => 'Bebas']);
        Driver::create(['name'  => 'Mohd Najme Shahbani', 'phone' => '0124766464', 'pergerakan' => 'Bebas']);
        Driver::create(['name'  => 'Mohd. Azwat Mohd. Azlan', 'phone' => '0136682357', 'pergerakan' => 'VIP']);
        Driver::create(['name'  => 'Abdul Quyyum Syafiq Hasnan', 'phone' => '0137797204', 'pergerakan' => 'Bebas']);
        Driver::create(['name'  => 'Mohd Shahrul Akmal Mohd Latiff', 'phone' => '0195022407', 'pergerakan' => 'Bebas']);
        Driver::create(['name'  => 'Rozainizam Bin Azmi', 'phone' => '0124131207', 'pergerakan' => 'Bebas']);
        Driver::create(['name'  => 'Hasrull Nizam Bin Ahmad', 'phone' => '01136161264', 'pergerakan' => 'Bebas']);
        Driver::create(['name'  => 'Mohd Nor Hafifi Bin Hakir @ Hakim', 'phone' => '0195430729', 'pergerakan' => 'Bebas']);
        Driver::create(['name'  => 'Nazrin bin Rus', 'phone' => '0184041083', 'pergerakan' => 'Bebas']);
        Driver::create(['name'  => 'Mohd Hazril Azuan', 'phone' => '0195001013', 'pergerakan' => 'Dalam']);
        Driver::create(['name'  => 'Yusof Azam Mohd Muhsin', 'phone' => '0194561121', 'pergerakan' => 'Dalam']);
        Driver::create(['name'  => 'Mohd Nazri Bin Mat', 'phone' => '0166756300', 'pergerakan' => 'Dalam']);
        Driver::create(['name'  => 'Zulkeflee Zainol Abidin', 'phone' => '0105699727', 'pergerakan' => 'Sakit']);
        Driver::create(['name'  => 'Azahar Ibrahim', 'phone' => '0195570066', 'pergerakan' => 'Sakit']);



    }
}
