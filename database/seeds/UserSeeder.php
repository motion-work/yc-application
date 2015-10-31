<?php

use Illuminate\Database\Seeder;
use YoungChampion\Models\User;

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
            'firstname'          => 'Natthakit',
            'lastname'           => 'Khamso',
            'email'              => 'natthakit.khamso@swisscom.com',
            'password'           => bcrypt('$Summer18'),
        ]);
        User::create([
            'firstname'          => 'Thomas',
            'lastname'           => 'Albori',
            'email'              => 'thomas.albori@swisscom.com',
            'password'           => bcrypt('$thomas18'),
        ]);
        User::create([
            'firstname'          => 'Gast',
            'lastname'           => 'Konto',
            'email'              => 'everyone@swisscom.com',
            'password'           => bcrypt('$youngchampion2016'),
        ]);
    }
}
