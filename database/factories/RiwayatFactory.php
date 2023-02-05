<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Riwayat>
 */
class RiwayatFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nama' => fake()->name(),
            'umur' => mt_rand(20,30), 
            'penyakit' => 'Keracunan Sianida'
        ];
    }
}
