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
        $user=user::factory()->create();
        $lapangan=lapangan::factory()->create();
        return [
            'id_user'=>$user->id,
            'id_lapangan'=>$lapangan->id,
            'tgl_pemesanan'=>$this->faker->date(),
            'tgl_main'=>$this->faker->date(),
            'jam'=>$this->faker->time(),
            'status'=>$this->faker->randomElement(['pending', 'paid', 'cancelled']),
        ];
    }
}
