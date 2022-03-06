<?php

namespace Database\Seeders;

use App\Models\HomeSectionOne;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HomeSectionOneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        HomeSectionOne::create([
            'item_one' => "<p><strong>Welcome to the Polliprottasha&#39;s website, a renown socio-economic organization in Bangladesh. Polliprottasha is a good practiced MFI which has the aims to improve the life quality of the people living at the bottom of the socio-economic pyramid. Polliprottasha focus at awareness-raising and group formation for the aiming at integrated development by establishing rights of the poor Women, Education, Healthcare, Agriculture and credit for income generation activities.</strong></p>

            <p><strong>Nearly one thousand people in Gouripur, Mymensingh are getting benefit from the services and activities of Polliprottasha.</strong></p>
            
            <p><strong>We hope this website will be helpful for you to know about Polliprottasha. Thanks and good wishes to all who are interested in microfinance which is effective tools to reduce poverty from the society.</strong></p>",
            'item_two' => "<p><strong>Polliprottasha is a socio-economic organization which was founded in 2003, at remote. Village Baluapara, Gouripur, Mymensingh. With welfare of the local community. It has a dynamic leadership approach which is key to make it possible to establish organizational sustainability with in the shortest time.</strong></p>",
            'item_three' => "<p><strong>Our mission is to support and develop the rural economy by facilitating access to finance and other service for the disadvantaged people.</strong></p>

            <p><strong>Building a poverty free Bangladesh through social awareness and income generating activities for the poor people.</strong></p>"
        ]);
    }
}
