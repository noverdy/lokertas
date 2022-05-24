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
            'street' => $this->faker->streetAddress(),
            'city' => $this->faker->cityName(),
            'province' => $this->faker->state(),
            'postal_code' => $this->faker->postcode(),
            'requirement' => $this->faker->text(100),
            'salary' => 'Rp' . number_format($this->faker->randomNumber(4, true) * 1000, 0, ',', '.'),
            'company_id' => Company::all()->random()->id,
            'created_at' => $this->faker->dateTimeBetween($startDate = '-6 month', $endDate = 'now')
        ];
    }
}
