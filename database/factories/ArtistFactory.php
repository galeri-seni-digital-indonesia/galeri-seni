<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ArtistFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama' => $this->faker->name(),
            'gambar' => $this->faker->imageUrl(360, 360, 'Foto', false, 'Seniman', true, 'jpg'),
            'biodata' => $this->faker->paragraph(),
        ];
    }
}
