<?php

namespace Database\Factories;

use Faker\Factory as FakerFactory;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\StudentModel>
 */
class StudentModelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {   
        $faker = FakerFactory::create();
        $department=["ELECTRICIAL_AND_ELECTRONICS","MECHANICAL","ELECTRICIAL_AND_COMMICATION","CIVIL","COMPUTER_SCIENCE"];
        $roll=["Student","Teacher"];
        $password = 'password@123';
        $phoneNumber = '9'; 
        $phoneNumber .= $faker->randomElement([7, 8, 9]); 
        $phoneNumber .= $faker->numerify('#######'); 
        return [
            'name' => fake()->name(),
            'phone' => $phoneNumber,
            'department' => fake()->randomElement($department),
            'roll' => fake()->randomElement($roll),
            'email' => fake()->unique()->safeEmail(),
            'password' => Hash::make($password),

        ];
    }
}
