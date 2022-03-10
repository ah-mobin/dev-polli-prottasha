<?php

namespace Database\Seeders;

use App\Models\DocumentaryYtLink;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DocumentaryYtLinkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ids = [
            ['Documentary Film','0FjFHmbyUTM'],
            ['Documentary On Palli Prottasha','xaYx3rZah1s']
        ];

        foreach($ids as $id){
            DocumentaryYtLink::create([
                'title' => $id[0],
                'yt_vide_id' => $id[1] 
            ]);
        }
    }
}
