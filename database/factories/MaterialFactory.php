<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Material>
 */
class MaterialFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //Definimos las variables y luego creamos un seeder para llamar a este factory 
            'nombre' => $this->faker->name,
            'volumen' => $this->faker->numerify('###'),
            'unidad' => $this->faker->randomElement(['ml','L','ul']),
            'cantidad_total' => $cantidadTotal = $this->faker->numerify('###'),
            'cantidad_uso' => $cantidadTotal,
            'fecha_uso' => $this->faker->dateTimeBetween('2024-01-01', '2024-12-31')->format('Y-m-d'),
            'fecha_entrega' => $this->faker->dateTimeBetween('2024-01-01', '2024-12-31')->format('Y-m-d'),
            'observaciones' => $this->faker->words(3,true),

        ];
    }
}
