<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Foundation\Auth\User;
use App\Models\Booking; // Import model Booking
use App\Models\Lapangan; // Import model Lapangan
use Illuminate\Support\Facades\Schema;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();
        Booking::truncate(); // Truncate tabel Booking
        Lapangan::truncate(); // Truncate tabel Lapangan
        User::truncate(); // Truncate tabel User
        schema::enableForeignKeyConstraints();
        // Menjalankan seeder UserSeeder
        $this->call(UserSeeder::class);

        // Menjalankan factory untuk membuat data booking dan lapangan
        Booking::factory(10)->create();
        Lapangan::factory(5)->create();
    }
}
