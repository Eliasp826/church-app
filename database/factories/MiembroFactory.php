<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Miembro;
use Faker\Generator as Faker;

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
        $lastName = $this->faker->randomElement(['I', 'B']);
        $name = $lastName == 'I' ? $this->faker->name() : $this->faker->lastName();
        return [
                'nombres' => $name,
                'apellidos' => $lastName,
                'cedula' => $this->faker->identificacioncard(),
                'genero' => $this->faker->randomElement(['masculino', 'feminino']),
                'fecha_nacimiento' => $this->faker->date('Y-m-d'),
                'direccion' => $this->faker->streetAddress(),
                'celular' => $this->faker->phoneNumber(),
                'telefono' => $this->faker->phoneNumber(),
                'correo_electronico' => $this->faker->email,
                'estado_civil' => $this->faker->randomElement(['soltero', 'casado', 'viudo', 'divorciado']),
                'fecha_conversion' => $this->faker->date('y-m-d', null),
                'fecha_bautismo' => $this->faker->date('Y-m-d', null),
                'recomendacion' => $this->faker->text(),
                'descripcion' => $this->faker->text(),
                'imagen' => $this->faker->image(),
            ];
    }
}
