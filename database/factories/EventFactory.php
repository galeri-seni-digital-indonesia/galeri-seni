<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class EventFactory extends Factory
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
            'namaPenyelenggara' => $this->faker->company(),
            'lokasi' => $this->faker->address(),
            'tanggal' => $this->faker->dateTime('2025-01-01 00:00:00'),
            'gambar' => $this->faker->imageUrl(360, 360, 'Pamflet', false, 'Acara', true, 'jpg'),
            'deskripsi' => $this->faker->paragraph(),
            'linkEvent' => $this->faker->url(),
        ];
    }
}
