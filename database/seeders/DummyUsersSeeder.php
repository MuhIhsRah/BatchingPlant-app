<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummyUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $UserData = [
            [
                'name' => 'SV',
                'email' => 'SV@gmail.com',
                'role' => 'Supervisor',
                'password' => bcrypt('sv1234567')
            ]
        ];
        foreach ($UserData as $key => $val) {
            User::create($val);
        }
    }
}
