<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name'=>$this->faker->unique()->userName(),
            'email'=>$this->faker->email(),
            'city'=>$this->faker->city(),
            'salary'=>$this->faker->numberBetween(2000,50000),
            'age'=>$this->faker->numberBetween(17,56)
        ];
    }
}
