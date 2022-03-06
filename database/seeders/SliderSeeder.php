<?php

namespace Database\Seeders;

use App\Models\Slider;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $base = config('app.url').'/assets/img/';
        $images = [
            $base.'header-slider-01.jpg',
        ];

        foreach($images as $item){
            Slider::create([
                'image' => $item
            ]);
        }
    }
}
