<?php

namespace Database\Factories;

use App\Models\Company;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Vacancy>
 */
class VacancyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->jobTitle(),
            'description' => $this->faker->text(),
            'address' => $this->faker->address(),
            'requirement' => $this->faker->text(100),
            'salary' => 'Rp' . $this->faker->randomNumber(9),
            'company_id' => Company::all()->random()->id,
        ];
    }
}
