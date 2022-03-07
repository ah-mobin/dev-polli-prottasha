<?php

namespace Database\Seeders;

use App\Models\Organogram;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrganogramSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Organogram::create([
            'image' => config('app.url').'/assets/img/organogram.png',
        ]);
    }
}
