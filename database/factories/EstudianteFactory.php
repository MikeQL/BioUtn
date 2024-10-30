<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Estudiante>
 */
class EstudianteFactory extends Factory
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
            'nombres' => $this->faker->name,
            'apellidos' => $this->faker->lastName,
            'ci' => $this->faker->unique()->numerify("##########"),
            'celular' => $this->faker->phoneNumber,
            'correo' => $this->faker->unique()->userName . '@utn.edu.ec',
            'direccion' => $this->faker->address,
            'semestre' => $this->faker->randomElement(['Primero','Segundo','Tercero','Cuarto','Quinto','Sexto','Septimo','Octavo','Noveno','Decimo','Egresado']),
            'observaciones' => $this->faker->words(3,true),

        ];
    }
}
