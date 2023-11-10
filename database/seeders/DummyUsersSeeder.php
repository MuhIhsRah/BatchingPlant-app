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
                'name'=>'mas operator',
                'email'=>'operator@gmail.com',
                'role'=>'Operator',
                'password'=>bcrypt('12345678')
            ],
            [
                'name'=>'mas supervisor',
                'email'=>'supervisor@gmail.com',
                'role'=>'Supervisor',
                'password'=>bcrypt('123456789')
            ],
        ];
        foreach($UserData as $key => $val){
            User::create($val);
        }
    }
}
