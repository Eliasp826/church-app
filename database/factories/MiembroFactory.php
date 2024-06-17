<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Miembro;
use Illuminate\Database\Eloquent\Model;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Miembro>
 */
class MiembroFactory extends Factory
{
    /**
     */

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Miembro::class;
    public function definition(): array
    {
        $lastName = $this->faker->randomElement(['I', 'B']);
        $name = $lastName == 'I' ? $this->faker->name() : $this->faker->lastName();
        return [
                'nombres' => $name,
                'apellidos' => $lastName,
                'cedula' => $this->faker->unique()->randomNumber(),
                'genero' => $this->faker->randomElement(['M', 'F']),
                'fecha_nacimiento' => $this->faker->date('Y-m-d'),
                'edad' => $this->faker->numberBetween('18', '90'),
                'provincia' => $this->faker->state(),
                'direccion' => $this->faker->streetAddress(),
                'celular1' => $this->faker->phoneNumber(),
                'celular2' => $this->faker->optional()->phoneNumber(),
                'correo_electronico' => $this->faker->email,
                'estado_civil' => $this->faker->randomElement(['Soltero', 'Casado', 'Viudo', 'Divorciado']),
                'fecha_conversion' => $this->faker->date('y-m-d', null),
                'fecha_bautismo' => $this->faker->date('Y-m-d', null),
                'recomendacion' => $this->faker->optional()->sentence,
                'descripcion' => $this->faker->optional()->paragraph,
                'imagen' => $this->faker->optional()->imageUrl(),
            ];
    }
}
