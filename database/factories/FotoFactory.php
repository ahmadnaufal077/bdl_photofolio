<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\foto>
 */
class FotoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nama' => 'Naufal',
            'title' => fake()->sentence(),
            'deskripsi' => fake()->text(100),
            'image' => Arr::random(['gallery-images/gallery-1.jpg','gallery-images/gallery-2.jpg','gallery-images/gallery-3.jpg','gallery-images/gallery-4.jpg',])
            //
        ];
    }
}
