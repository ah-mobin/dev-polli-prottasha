<?php

namespace Database\Seeders;

use App\Models\LegalStatus;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LegalStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ls = [
            ['Department of Social Welfare, GoB','Ma – 01377',null,'29-06-2003'],
            ['Micro-credit Regulatory Authority',null,'http://www.mra.gov.bd/site/page/ffce375b-367e-4b12-bbb1-f2b9a1dc1cd6/%E0%A6%AA%E0%A7%8D%E0%A6%B0%E0%A6%BE%E0%A6%A5%E0%A6%AE%E0%A6%BF%E0%A6%95-%E0%A6%85%E0%A6%A8%E0%A7%81%E0%A6%AE%E0%A7%8B%E0%A6%A6%E0%A6%A8-%E0%A6%AA%E0%A7%8D%E0%A6%B0%E0%A6%BE%E0%A6%AA%E0%A7%8D%E0%A6%A4-%E0%A6%AA%E0%A7%8D%E0%A6%B0%E0%A6%A4%E0%A6%BF%E0%A6%B7%E0%A7%8D%E0%A6%A0%E0%A6%BE%E0%A6%A8%E0%A7%87%E0%A6%B0-%E0%A6%A4%E0%A6%BE%E0%A6%B2%E0%A6%BF%E0%A6%95%E0%A6%BE','15-12-2021']
        ];

        foreach($ls as $i){
            LegalStatus::create([
                'department_name' => $i[0],
                'registration_no' => $i[1],
                'registration_link' => $i[2],
                'registration_date' => $i[3],
            ]);
        }
    }
}
