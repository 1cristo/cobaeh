<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' =>'CEMSAD HUALULA',
            'email' => 'cemsadhualula@gmail.com',
            'password' => bcrypt('somoscobaeh')

        ]);

        User::factory(9)->create();
    }
}
