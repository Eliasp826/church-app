<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\AreasDeServicio;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\AreasDeServicio>
 */
class AreasDeServicioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre' => $this->faker->unique()->word,
            'descripcion' => $this->faker->sentence(),
            'responsable' => $this->faker->name(),
        ];
    }
}
