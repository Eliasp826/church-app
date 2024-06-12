<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\AreasDeServicio;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Actividades>
 */
class ActividadesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        return [
            'nombre_actividades' => $this->faker->sentence(),
            'descripcion' => $this->faker->paragraph(),
            'fecha_inicia_actividad' => $this->faker->dataTimeBetween('-1 week', '+1 week'),
            'fecha_termino_actividad' => $this->faker->dataTimeBetween($this->faker->date('Y-m-d'), $this->faker->date('Y-m-d')),
            'hora_inicio_actividad' => $this->faker->time(),
            'hora_termino_actividad' => $this->faker->time(),
            'lugar' => $this->faker->streetAddress(),
            'responsable' => $this->faker->name(),
            'area_de_servicio_id' => AreasDeServicio::factory(),
        ];
    }
}
