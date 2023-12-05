<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ArtFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama' => $this->faker->sentence(3),
            'tahun' => $this-> faker->year('-100 years'),
            'ukuran' => $this-> faker->numerify('### cm x ### cm'),
            'mediaLukis' => $this->faker->randomElement(['Kanvas', 'Mural', 'Mozaik', 'Kaca']),
            'gambar' => $this->faker->imageUrl(640, 480, 'Gambar', false, 'Lukisan', true, 'jpg'),
            'deskripsi' => $this->faker->paragraph(),
            'artistId' => $this->faker->numberBetween(1, 20),
        ];
    }
}
