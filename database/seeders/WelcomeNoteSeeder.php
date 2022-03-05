<?php

namespace Database\Seeders;

use App\Models\WelcomeNote;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WelcomeNoteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        WelcomeNote::create([
            'title' => 'Welcome Notes of PolliProttasha',
            'note' => "<p>Welcome to the Polliprottasha's website, a renown socio-economic organization in Bangladesh. Polliprottasha is a good practiced MFI which has the aims to improve the life quality of the people living at the bottom of the socio-economic pyramid. Polliprottasha focus at awareness-raising and group formation for the aiming at integrated development by establishing rights of the poor Women, Education, Healthcare, Agriculture and credit for income generation activities.</p><p>Nearly one thousand people in Gouripur, Mymensingh are getting benefit from the services and activities of Polliprottasha.</p><p>We hope this website will be helpful for you to know about Polliprottasha. Thanks and good wishes to all who are interested in microfinance which is effective tools to reduce poverty from the society.</p>",
        ]);
    }
}
