<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class studentModelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $gender_arr = ['F','M'];
        return [
            //
            'fname' => fake()->name(),
            'lname' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'Contact' => fake()->phoneNumber(),
            'dob'=> '',
            'gender' => 'F',
            'address' => fake()->address(),
            'teacher_id' =>rand(1,20),
            'stream' => rand(1,12),
            'academicYears' => fake()->year('now'),
        ];
    }
}
