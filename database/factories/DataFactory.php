<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Ward;
use App\Models\EmpStatus;
use App\Models\LocalGov;
use App\Models\Qualification;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Data>
 */
class DataFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'qualification_id' => Qualification::inRandomOrder()->first(),
            'emp_status_id' => EmpStatus::inRandomOrder()->first(),
            'first_name' => $this->faker->firstName('male'),
            'last_name' => $this->faker->lastName('male'),
            'user_id' => User::inRandomOrder()->first(),
            'ward_id' => Ward::inRandomOrder()->first(),
            'email' => $this->faker->safeEmail(),
            'phone_number' => 07066352444,
            'gender' => 'male',
            'dob' => now(),
        ];
    }
}
