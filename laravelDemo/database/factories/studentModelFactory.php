<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class studentModelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $password=$this->faker->word(8);
        return [
            'name'=>$this->faker->name,
            'roll_no'=>$this->faker->unique()->numberBetween(4,10),
            'class'=>$this->faker->numberBetween(12),
            'total'=>$this->faker->numberBetween(450,600),
            'password'=>convert_uuencode($password)
        ];
    }
}
