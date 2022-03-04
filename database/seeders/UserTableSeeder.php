<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Admin User',
            'email' => 'admin@mail.com',
            'password' => bcrypt('12345678@')
        ]);

        User::create([
            'name' => 'Super User',
            'email' => 'superadmin@mail.com',
            'password' => bcrypt('Password250@'),
            'is_super' => 1
        ]);
    }
}
