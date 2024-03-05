<?php

namespace Database\Seeders;

use App\Models\Driver;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DriverSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $patterns = ['/Ahmad/', '/Mohd/', '/Mohd /', '/Muhammad/', '/Mohd./', '/Mohamad/', '/Abdul/', '/Bin/', '/bin/', '/Abu/', '/Nor/'];

        $driver = Driver::create(['name'  => 'Zakaria Ahmad', 'phone' => '0103933172', 'department' => 'Bahagian Khidmat Pengurusan', 'type' => 'VIP']);
        $driver->slug = explode(' ', Str::squish(Str::remove('. ', preg_replace($patterns, '', $driver->name))));
        $driver->slug = $driver->slug[0];
        $driver->save();

        $driver = Driver::create(['name'  => 'Ahmad Fahmi Ibrahim', 'phone' => '0194562510', 'department' => 'Bahagian Khidmat Pengurusan', 'type' => 'VIP']);
        $driver->slug = explode(' ', Str::squish(Str::remove('. ', preg_replace($patterns, '', $driver->name))));
        $driver->slug = $driver->slug[0];
        $driver->save();

        $driver = Driver::create(['name'  => 'Mohd. Aizam Azmi', 'phone' => '0125784960', 'department' => 'Bahagian Khidmat Pengurusan', 'type' => 'VIP']);
        $driver->slug = explode(' ', Str::squish(Str::remove('. ', preg_replace($patterns, '', $driver->name))));
        $driver->slug = $driver->slug[0];
        $driver->save();

        $driver = Driver::create(['name'  => 'Mohamad Zakaria Yop', 'phone' => '0194269905', 'department' => 'Bahagian Khidmat Pengurusan', 'type' => 'VIP']);
        $driver->slug = explode(' ', Str::squish(Str::remove('. ', preg_replace($patterns, '', $driver->name))));
        $driver->slug = $driver->slug[0];
        $driver->save();

        $driver = Driver::create(['name'  => 'Abu Seman Ishak', 'phone' => '01164452398', 'department' => 'Bahagian Khidmat Pengurusan', 'type' => 'Bebas']);
        $driver->slug = explode(' ', Str::squish(Str::remove('. ', preg_replace($patterns, '', $driver->name))));
        $driver->slug = $driver->slug[0];
        $driver->save();

        $driver = Driver::create(['name'  => 'Hamzah Ishak', 'phone' => '0133461134', 'department' => 'Bahagian Khidmat Pengurusan', 'type' => 'Bebas']);
        $driver->slug = explode(' ', Str::squish(Str::remove('. ', preg_replace($patterns, '', $driver->name))));
        $driver->slug = $driver->slug[0];
        $driver->save();

        $driver = Driver::create(['name'  => 'Zulhanim Hashim', 'phone' => '0175055186', 'department' => 'Bahagian Khidmat Pengurusan', 'type' => 'Bebas']);
        $driver->slug = explode(' ', Str::squish(Str::remove('. ', preg_replace($patterns, '', $driver->name))));
        $driver->slug = $driver->slug[0];
        $driver->save();

        $driver = Driver::create(['name'  => 'Muhammad Hafdzi Husni', 'phone' => '01126862742', 'department' => 'Bahagian Khidmat Pengurusan', 'type' => 'Bebas']);
        $driver->slug = explode(' ', Str::squish(Str::remove('. ', preg_replace($patterns, '', $driver->name))));
        $driver->slug = $driver->slug[0];
        $driver->save();

        $driver = Driver::create(['name'  => 'Suhardi Bin Idrus', 'phone' => '0166784734', 'department' => 'Bahagian Khidmat Pengurusan', 'type' => 'Bebas']);
        $driver->slug = explode(' ', Str::squish(Str::remove('. ', preg_replace($patterns, '', $driver->name))));
        $driver->slug = $driver->slug[0];
        $driver->save();

        $driver = Driver::create(['name'  => 'Andalan Azali', 'phone' => '0125131900', 'department' => 'Bahagian Khidmat Pengurusan', 'type' => 'Dalam']);
        $driver->slug = explode(' ', Str::squish(Str::remove('. ', preg_replace($patterns, '', $driver->name))));
        $driver->slug = $driver->slug[0];
        $driver->save();

        $driver = Driver::create(['name'  => 'Mohamad Akmal Zikri', 'phone' => '0175483136', 'department' => 'Bahagian Khidmat Pengurusan', 'type' => 'Bebas']);
        $driver->slug = explode(' ', Str::squish(Str::remove('. ', preg_replace($patterns, '', $driver->name))));
        $driver->slug = $driver->slug[0];
        $driver->save();

        $driver = Driver::create(['name'  => 'Muhammad Akmal Hassan', 'phone' => '0174180384', 'department' => 'Bahagian Khidmat Pengurusan', 'type' => 'Bebas']);
        $driver->slug = explode(' ', Str::squish(Str::remove('. ', preg_replace($patterns, '', $driver->name))));
        $driver->slug = $driver->slug[0];
        $driver->save();

        $driver = Driver::create(['name'  => 'Mohd Najme Shahbani', 'phone' => '0124766464', 'department' => 'Bahagian Khidmat Pengurusan', 'type' => 'Bebas']);
        $driver->slug = explode(' ', Str::squish(Str::remove('. ', preg_replace($patterns, '', $driver->name))));
        $driver->slug = $driver->slug[0];
        $driver->save();

        $driver = Driver::create(['name'  => 'Mohd. Azwat Mohd. Azlan', 'phone' => '0136682357', 'department' => 'Bahagian Khidmat Pengurusan', 'type' => 'VIP']);
        $driver->slug = explode(' ', Str::squish(Str::remove('. ', preg_replace($patterns, '', $driver->name))));
        $driver->slug = $driver->slug[0];
        $driver->save();

        $driver = Driver::create(['name'  => 'Abdul Quyyum Syafiq Hasnan', 'phone' => '0137797204', 'department' => 'Bahagian Khidmat Pengurusan', 'type' => 'Bebas']);
        $driver->slug = explode(' ', Str::squish(Str::remove('. ', preg_replace($patterns, '', $driver->name))));
        $driver->slug = $driver->slug[0];
        $driver->save();

        $driver = Driver::create(['name'  => 'Mohd Shahrul Akmal Mohd Latiff', 'phone' => '0195022407', 'department' => 'Bahagian Khidmat Pengurusan', 'type' => 'Bebas']);
        $driver->slug = explode(' ', Str::squish(Str::remove('. ', preg_replace($patterns, '', $driver->name))));
        $driver->slug = $driver->slug[0];
        $driver->save();

        $driver = Driver::create(['name'  => 'Rozainizam Bin Azmi', 'phone' => '0124131207', 'department' => 'Bahagian Khidmat Pengurusan', 'type' => 'Bebas']);
        $driver->slug = explode(' ', Str::squish(Str::remove('. ', preg_replace($patterns, '', $driver->name))));
        $driver->slug = $driver->slug[0];
        $driver->save();

        $driver = Driver::create(['name'  => 'Hasrull Nizam Bin Ahmad', 'phone' => '01136161264', 'department' => 'Bahagian Khidmat Pengurusan', 'type' => 'Bebas']);
        $driver->slug = explode(' ', Str::squish(Str::remove('. ', preg_replace($patterns, '', $driver->name))));
        $driver->slug = $driver->slug[0];
        $driver->save();

        $driver = Driver::create(['name'  => 'Mohd Nor Hafifi Bin Hakir @ Hakim', 'phone' => '0195430729', 'department' => 'Bahagian Khidmat Pengurusan', 'type' => 'Bebas']);
        $driver->slug = explode(' ', Str::squish(Str::remove('. ', preg_replace($patterns, '', $driver->name))));
        $driver->slug = $driver->slug[0];
        $driver->save();

        $driver = Driver::create(['name'  => 'Nazrin bin Rus', 'phone' => '0184041083', 'department' => 'Bahagian Khidmat Pengurusan', 'type' => 'Bebas']);
        $driver->slug = explode(' ', Str::squish(Str::remove('. ', preg_replace($patterns, '', $driver->name))));
        $driver->slug = $driver->slug[0];
        $driver->save();

        $driver = Driver::create(['name'  => 'Mohd Hazril Azuan', 'phone' => '0195001013', 'department' => 'Bahagian Khidmat Pengurusan', 'type' => 'Dalam']);
        $driver->slug = explode(' ', Str::squish(Str::remove('. ', preg_replace($patterns, '', $driver->name))));
        $driver->slug = $driver->slug[0];
        $driver->save();

        $driver = Driver::create(['name'  => 'Yusof Azam Mohd Muhsin', 'phone' => '0194561121', 'department' => 'Bahagian Khidmat Pengurusan', 'type' => 'Dalam']);
        $driver->slug = explode(' ', Str::squish(Str::remove('. ', preg_replace($patterns, '', $driver->name))));
        $driver->slug = $driver->slug[0];
        $driver->save();

        $driver = Driver::create(['name'  => 'Mohd Nazri Bin Mat', 'phone' => '0166756300', 'department' => 'Bahagian Khidmat Pengurusan', 'type' => 'Dalam']);
        $driver->slug = explode(' ', Str::squish(Str::remove('. ', preg_replace($patterns, '', $driver->name))));
        $driver->slug = $driver->slug[0];
        $driver->save();

        $driver = Driver::create(['name'  => 'Zulkeflee Zainol Abidin', 'phone' => '0105699727', 'department' => 'Bahagian Khidmat Pengurusan', 'type' => 'Sakit']);
        $driver->slug = explode(' ', Str::squish(Str::remove('. ', preg_replace($patterns, '', $driver->name))));
        $driver->slug = $driver->slug[0];
        $driver->save();

        $driver = Driver::create(['name'  => 'Azahar Ibrahim', 'phone' => '0195570066', 'department' => 'Bahagian Khidmat Pengurusan', 'type' => 'Sakit']);
        $driver->slug = explode(' ', Str::squish(Str::remove('. ', preg_replace($patterns, '', $driver->name))));
        $driver->slug = $driver->slug[0];
        $driver->save();




    }
}
