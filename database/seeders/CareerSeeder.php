<?php

namespace Database\Seeders;

use App\Models\Career;
use App\Models\Gallery;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CareerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Career::create([
            'title' => 'Click Here to Show Recruitment Notification',
            'image' => config('app.url').'/assets/img/notice.jpg',
        ]);

        Gallery::create([
            'image' => config('app.url').'/assets/img/notice.jpg',
        ]);
    }
}
