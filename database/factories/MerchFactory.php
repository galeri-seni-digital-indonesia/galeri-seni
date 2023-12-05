<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class MerchFactory extends Factory
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
            'gambar' => $this->faker->imageUrl(360, 360, 'Foto', false, 'Merch', true, 'jpg'),
            'deskripsi' => $this->faker->paragraph(),
            'harga' => $this->faker->randomNumber(3, true) * 1000,
            'link' => $this->faker->url(),
        ];
    }
}
