<?php

namespace Database\Seeders;

use App\Models\SiteSettings;
use Illuminate\Database\Seeder;

class SiteSettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $host = config('app.url');
        SiteSettings::create([
            'site_name' => 'Polli Prottasha',
            'site_name_bn' => 'পল্লী প্রত্যাশা',
            'favicon' => $host.'\assets\img\favicon.jpg',
            'logo' => $host.'\assets\img\polliprottasha.jpg',
            'physical_address_line_one' => 'Ma Babar Dowa Villa',
            'physical_address_line_two' => 'Baluapara, Gauripur, Mymensingh',
            'email_address' => 'info@polliprottasha.org',
            'phone_number' => '+880-1618-7000-30',
            'copyright_text' => 'Polli Prottasha. All Rights Reserved.',
        ]);
    }
}
