<?php

namespace Database\Seeders;

use App\Models\ChairmanSpeech;
use App\Models\Gallery;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ChairmanSpeechSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ChairmanSpeech::create([
            'title' => "Chairman's Massage",
            'speech' => "<p>From 1971 Bangladesh is facing many challenges including social, environment and economical aspect. It's education, health, live hood women empowerment and socio-economic sector is steel vulnerable. Polliprottasha continues to staff are very careful about their respective responsibilities to fill up organizational objectives.</p><p><b>Polliprottasha</b> is a socio-economic organization founded in 2003 to raise social  awareness, em-power of women and poverty reduction through effective tools and programs.</p><p>Currently, we are leading Several Social welfare project and programs in Agriculture Education, health, nutrition and wash , Disaster risk reduction, climate change, livelihood and rural development sector.</p><p>Microfinance is our major program for economic development inters of poverty reduction and women empowerment through income generating activities  in rural area of Bangladesh . I hope , we can make a positive change for our community and beneficiaries.</p><p>Above all I would like to thank to the govt. our members beneficiaries and generous donors who give their extreme support and commitment for social and economic development.</p><p>Thank you.</p>",
            'image' => config('app.url').'/assets/img/chairman.jpg',
        ]);

        Gallery::create([
            'image' => config('app.url').'/asssets/img/chairman.jpg',
        ]);
    }
}
