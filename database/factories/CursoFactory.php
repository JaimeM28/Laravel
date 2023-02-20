<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Curso>
 */
class CursoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //se usa el método faker y la función para llenar y se asigna al atributo
            'name'=>$this->faker->sentence(),
            'descripcion'=> $this->faker->paragraph(),
            'categoria' => $this->faker->randomElement(["Desarrollo","Diseño"])
        ];
    }
}
