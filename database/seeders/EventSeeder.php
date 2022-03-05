<?php

namespace Database\Seeders;

use App\Models\Event;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Event::create([
            'title' => 'গৌরীপুরে পল্লী প্রত্যাশা',
            'link' => 'https://dailybahadur.com/%e0%a6%97%e0%a7%8c%e0%a6%b0%e0%a7%80%e0%a6%aa%e0%a7%81%e0%a6%b0%e0%a7%87-%e0%a6%aa%e0%a6%b2%e0%a7%8d%e0%a6%b2%e0%a7%80-%e0%a6%aa%e0%a7%8d%e0%a6%b0%e0%a6%a4%e0%a7%8d%e0%a6%af%e0%a6%be%e0%a6%b6%e0%a6%be/'
        ]);
    }
}
