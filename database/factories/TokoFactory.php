<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\toko>
 */
class TokoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nama' => $this->faker->name,
            'deskripsi' => $this->faker->text,
            'lokasi' => $this->faker->address,
            'whatsapp' => $this->faker->phoneNumber,
            'instagram' => $this->faker->firstName,
        ];
    }
}
