<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\lapangan>
 */
class LapanganFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama' => fake()->name(),
            'jenis' => fake()->randomElement(['Vynil', 'Keramik', 'Karet']),
            'harga' => fake()->numberBetween(100000, 150000),
            'gambar' => function (array $data) {
                // Jika jenis lapangan adalah Vynil, set gambar ke 'assets/img/lapangan/lap1.jpg'
                if ($data['jenis'] === 'Vynil') {
                    return 'assets/img/lapangan/lap2.jpg';
                }
                // Jika jenis lapangan adalah Keramik, set gambar ke 'assets/img/lapangan/lap2.jpg'
                elseif ($data['jenis'] === 'Keramik') {
                    return 'assets/img/lapangan/lap3.jpg';
                } elseif ($data['jenis'] === 'Karet') {
                    return 'assets/img/lapangan/lap1.jpg';
                }
                // Jika jenis lapangan tidak cocok, kembalikan null atau atur logika lainnya di sini
                else {
                    return null;
                }
            },
        ];
    }
}
