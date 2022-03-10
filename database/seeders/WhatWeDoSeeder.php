<?php

namespace Database\Seeders;

use App\Models\WhatWeDo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WhatWeDoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $wwdos = [
            [
                'Microfinance Program',
                'Currently Polliprottasha offers two types of loan, like: Primary loan and special loan : Primary loan is a group based loan for maximum payback period of 12 months with a loan ceiling of BDT 50,000; While special loan is a short term loan for 03 months with range from BDT 10,000 to BDT. 20,000 both types of loan have disbursed without collateral.',
                config('app.url').'/assets/img/IMG-20220113-WA0002_0604.jpg'
            ],

            [
                'SEP (Small Enterprise Program)',
                'Small and medium enterprises are the key sector for growth and development of Bangladesh economy . Polliprottasha provides loan for small enterprises with a range of loan BDT 50,000 to BDT 2,00,000.',
                config('app.url').'/assets/img/20220221_170027_HDR_8443.jpg'
            ],

            [
                'Agriculture Support Program',
                'Using pesticide in our crops causes many dangerous dieses to rural people . We are building awareness to use pesticide very cautiously which is harmful to public health. Polliprottasha also provide financial support to the potential entrepreneurs and traders of agro-products and farmers.',
                ''
            ],

            [
                'Health Program',
                'Rural villages in Bangladesh are facing barrier to get easy healthcare services . Polliprottasha gives assistance to old citizen for their eye operation.',
                ''
            ],
            [
                'Sanitation Program',
                'Develop Women today, ensure sustainable tomorrow . Polliprottasha is working on set up separate toilet and breast feeding center for women in village markets, school-college and factory.',
                config('app.url').'/assets/img/sani.jpg'
            ],

            [
                'Non Formal/Education Program',
                'Dropout from the primary school is a major challenge for primary education sector. The Dropout children\'s are become as victims for their poor family conditions. Polliprottasha is focusing social awareness to protect dropout from primary school . We also provide free financial support to them.',
                config('app.url').'/assets/img/IMG-20211117-WA0023.jpg'
            ],
        ];

        
        foreach($wwdos as $wwd){
            WhatWeDo::create([
                'title' => $wwd['0'],
                'desc' => $wwd['1'],
                'image' => $wwd['2'],
            ]);
        }
    }
}
