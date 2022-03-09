<?php

namespace Database\Seeders;

use App\Models\Gallery;
use App\Models\PromotionalBanner;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PromotionalBannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PromotionalBanner::create([
            'title' => 'স্বাধীনতার সুবর্ণ জয়ন্তী',
            'image' => config('app.url').'/assets/img/BD_golden_jubilee.png',
        ]);

        Gallery::create([
            'image' => config('app.url').'/assets/img/BD_golden_jubilee.png',
        ]);
    }
}
