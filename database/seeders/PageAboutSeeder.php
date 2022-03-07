<?php

namespace Database\Seeders;

use App\Models\PageAbout;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PageAboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PageAbout::create([
            'history' => "<p><strong>Welcome to the Polliprottasha&#39;s website, a renown socio-economic organization in Bangladesh. Polliprottasha is a good practiced MFI which has the aims to improve the life quality of the people living at the bottom of the socio-economic pyramid. Polliprottasha focus at awareness-raising and group formation for the aiming at integrated development by establishing rights of the poor Women, Education, Healthcare, Agriculture and credit for income generation activities.</strong></p>",
            'mission' => "<p><strong>Nearly one thousand people in Gouripur, Mymensingh are getting benefit from the services and activities of Polliprottasha.</strong></p>",
            'vision' => "<p><strong>We hope this website will be helpful for you to know about Polliprottasha. Thanks and good wishes to all who are interested in microfinance which is effective tools to reduce poverty from the society.</strong></p>"
        ]);
    }
}
