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
            'nombre_actividades' => $faker->sentence(),
            'descripcion' => $faker->paragraph(),
            'fecha_inicia_actividad' => $faker->dataTimeBetween('-1 week', '+1 week'),
            'fecha_termino_actividad' => $faker->dataTimeBetween($faker->date('Y-m-d'), $faker->date('Y-m-d')),
            'hora_inicio_actividad' => $faker->time(),
            'hora_termino_actividad' => $faker->time(),
            'lugar' => $faker->streetAddress(),
            'responsable' => $faker->name(),
            'area_de_servicio_id' => AreasDeServicio::factory(),
        ];
    }
}
