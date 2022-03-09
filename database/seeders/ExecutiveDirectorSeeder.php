<?php

namespace Database\Seeders;

use App\Models\ExecutiveDirector;
use App\Models\Gallery;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ExecutiveDirectorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ExecutiveDirector::create([
            'title' => "Executive Director",
            "speech" => "<p>Sheikh Faruque ahammad has been working in development field over fifteen years tenures . He gained an ample experience in diverse development paradigms; like Microfinance (MF) management, result based program management (RBM), Project life cycle management (PCM) and value chain Project facilitation (VCF) approach.</p><p>He has been developed number of project proposals in accordance with theory of  Change (TOC) and logical frame work (Log Frame) Identification , design, Planning, implementation, capacities building, HR management, monitoring and control is the another of his expertise.</p><p>He has exposure to work with a range of national and international  development  organization including; POPI –PACE Value Chain Project (managed by PKSF funded by IFAD), ASA- as a Regional Managers (RM).</p>
            <p>He also worked for BRAC- International, Head office, BRAC Center, Mohakhali, Dhaka and BRAC – Uganda- as a Senior Sector Specialist, Loan review unit, Microfinance program.</p>
            <p>He did B.S.S and M.S.S degree in Economics from the universities of Dhaka.</p>
            <p>He is  a active member of DUFA.</p>",
            "image" => config('app.url').'/asssets/img/director.jpg',
        ]);

        Gallery::create([
            'image' => config('app.url').'/asssets/img/director.jpg',
        ]);
    }
}
