<?php

namespace Database\Seeders;

use App\Models\HomeSectionOne;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserTableSeeder::class,
            CareerSeeder::class,
            ChairmanSpeechSeeder::class,
            DocumentaryYtLinkSeeder::class,
            EventSeeder::class,
            ExecutiveDirectorSeeder::class,
            HomeSectionOneSeeder::class,
            HomeSectionThreeSeeder::class,
            LegalStatusSeeder::class,
            NoticeSeeder::class,
            OrganogramSeeder::class,
            PageAboutSeeder::class,
            PromotionalBannerSeeder::class,
            SiteSettingsSeeder::class,
            SliderSeeder::class,
            SuccessStorySeeder::class,
            WelcomeNoteSeeder::class,
            WhatWeDoSeeder::class,
        ]);
    }
}
