<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use phpDocumentor\Reflection\Types\This;

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
            'nombre'=>$this->faker->firstName(),
            'nombre_2'=>$this->faker->firstName(),
            'apellido'=>$this->faker->lastName(),
            'apellido_2'=>$this->faker->lastName(),
            'telefono'=>$this->faker->phoneNumber(),
            'Direccion'=>$this->faker->address(),
            'edad'=>$this->faker->numberBetween(1,100),
            'foto'=>$this->faker->image('public/images',20,20,null,false),
            'cantidad_hijos'=>$this->faker->numberBetween(1,5),
            'numeroid'=>$this->faker->numerify('##########')
        ];
    }
}
