<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class UsuarioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'Nombre1'=>$this->faker->name(),
            'Nombre2'=>$this->faker->name(),
            'Apellido1'=>$this->faker->word(),
            'Apellido2'=>$this->faker->word(),
            'Tel'=>$this->faker->phoneNumber(),
            'Direccion'=>$this->faker->word(),
            'edad'=>$this->faker->numberBetween(1,100),
            'foto'=>$this->faker->image('public/images',20,20,null,false)
        ];
    }
}
