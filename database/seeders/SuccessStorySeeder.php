<?php

namespace Database\Seeders;

use App\Models\Gallery;
use App\Models\SuccessStory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SuccessStorySeeder extends Seeder
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
            $base.'s-02.jpg',
            $base.'20220221_072312_4858_7817.jpg',
            $base.'20220221_082820_HDR_0938.jpg',
            $base.'20220221_074825_0622_3656.jpg',
        ];

        foreach($images as $item){
            SuccessStory::create([
                'image' => $item
            ]);

            Gallery::create([
                'image' => $item,
            ]);
        }
    }
}
