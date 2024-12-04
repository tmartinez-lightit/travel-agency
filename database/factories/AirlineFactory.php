<?php

declare(strict_types=1);

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Lightit\Cities\Domain\Models\Airline;

/**
 * @extends Factory<Airline>
 */
class AirlineFactory extends Factory
{
    protected $model = Airline::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->unique()->company(),
            'description' => fake()->paragraph(),
        ];
    }
}
