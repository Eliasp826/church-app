<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class MiembroResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return[
            'id' => $this->id,
            'nombres' => $this->name,
            'apellidos' => $this->lastName,
            'cedula' => $this->randomNumber,
            'correro_electronico' => $this->email,
            'celular1' => $this->phoneNumber,
            'celular2' => $this->phoneNumber,
            'direccion' => $this->streetAddress,
            'estado_civil' => $this->randomElement,
            'edad' => $this->numberBetween,
            'genero' => $this->randomElement,
            'provincia' => $this->state,
            'fecha_nacimiento' => $this->date
        ];
    }
}
