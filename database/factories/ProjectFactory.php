<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'city_id' => rand(1, 10),
            'company_id' => rand(1, 20),
            'user_id' => rand(1, 3),
            'budget' => rand(15000, 90000),
            'name' => Str::limit($this->faker->sentence(), 20),
            'execution_date' => $this->faker->date(),
            'is_active' => $this->faker->boolean()
        ];
    }
}
