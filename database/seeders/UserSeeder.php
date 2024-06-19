<?php

namespace Database\Seeders;

use App\Models\user;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        // Menyisipkan data baru
        user::insert([
            [
                'name' => 'Admin',
                'username' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('111'),
                'role' => 'admin',
                'telepon' => '08123456789',
                'remember_token' => Str::random(10),
            ],
            [
                'name' => 'User',
                'username' => 'User',
                'email' => 'user@gmail.com',
                'password' => Hash::make('111'),
                'role' => 'user',
                'telepon' => '08123456749',
                'remember_token' => Str::random(10),
            ]
        ]);
    }
}
