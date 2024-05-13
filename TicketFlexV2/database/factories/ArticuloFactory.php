<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Articulo>
 */
class ArticuloFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            'nombre' => $this->faker->name,
            'imagen_ruta' => $this->faker->imageUrl(),
            'descripcion' => $this->faker->text,
            'precio' => $this->faker->randomFloat(2, 0, 1000),
            'unidades' => $this->faker->randomNumber(2),
            'hora_entrada' => $this->faker->time(),
            'hora_salida' => $this->faker->time(),
                
        ];
    }
}
