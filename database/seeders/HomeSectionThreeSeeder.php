<?php

namespace Database\Seeders;

use App\Models\Gallery;
use App\Models\HomeSectionThree;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HomeSectionThreeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        HomeSectionThree::create([
            'title' => 'Working Area',
            'image' => config('app.url').'/assets/img/map-gauripur.jpg'
        ]);

        Gallery::create([
            'image' => config('app.url').'/assets/img/map-gauripur.jpg'
        ]);
    }
}
