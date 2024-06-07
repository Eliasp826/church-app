<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Miembro;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Miembro>
 */
class MiembroFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $type = $this->faker->randomElement(['I', 'B']);
        $name = $type == 'I' ? $this->faker->name() : $this->faker->company();
        return [
            //
            'nombres' => $name,
            'apellidos' => $faker->lastName,
            'cedula' => $faker->identificacioncard,
            'genero' => $faker->randomElement(['masculino', 'feminino']),
            'fecha_nacimiento' => $faker->date('Y-m-d'),
            'direccion' => $faker->address,
            'celular' => $faker->phoneNumber,
            'telefono' => $faker->phoneNumber,
            'correo_electronico' => $faker->email,
            'estado_civil' => $faker->randomElement(['soltero', 'casado', 'viudo', 'divorciado']),
            'fecha_conversion' => $faker->date('y-m-d', null),
            'fecha_bautismo' => $faker->date('Y-m-d', null),
            'recomendacion' => $faker->text,
            'descripcion' => $faker->text,
            'imagen' => $faker->image,
        ];
    }
}
