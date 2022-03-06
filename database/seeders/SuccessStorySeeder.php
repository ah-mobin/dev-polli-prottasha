<?php

namespace Database\Seeders;

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
        ];

        foreach($images as $item){
            SuccessStory::create([
                'image' => $item
            ]);
        }
    }
}
