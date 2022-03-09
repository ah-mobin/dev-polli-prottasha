<?php

namespace Database\Seeders;

use App\Models\Gallery;
use App\Models\Notice;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NoticeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Notice::create([
            'image' => config('app.url').'/assets/img/notice.jpg',
        ]);

        Gallery::create([
            'image' => config('app.url').'/assets/img/notice.jpg',
        ]);
    }
}
