<?php

namespace Database\Factories;

use App\Models\lapangan;
use App\Models\user;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\booking>
 */
class BookingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $user = user::factory()->create();
        $lapangan = lapangan::factory()->create();
        $times = [
            '08:00-09:00', '09:00-10:00', '10:00-11:00', '11:00-12:00',
            '12:00-13:00', '13:00-14:00', '14:00-15:00', '15:00-16:00',
            '16:00-17:00', '17:00-18:00', '18:00-19:00', '19:00-20:00',
            '20:00-21:00', '21:00-22:00', '22:00-23:00'
        ];
        return [
            'id_user' => $user->id,
            'id_lapangan' => $lapangan->id,
            'tgl_pemesanan' => $this->faker->date(),
            'tgl_main' => $this->faker->dateTimeBetween('2024-05-19', '2025-12-31')->format('Y-m-d'),
            'jam' => $this->faker->randomElement($times), // Use fixed times
            'status' => $this->faker->randomElement(['pending', 'paid', 'cancelled']),
        ];
    }
}
