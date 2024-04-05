<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $userData = [
            [
                'name' => 'Admin',
                'email'=> 'admin@example.com',
                'role'=>  'admin',
                'password'=> bcrypt('123456'),
            ],
            [
                'name' => 'pemake',
                'email'=> 'pemake@example.com',
                'role'=>  'user',
                'password'=> bcrypt('7891011'),
            ]
        ];
        foreach ($userData as $key=>$val){
            User::create($val);
        }
    }
}
