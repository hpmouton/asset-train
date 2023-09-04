<?php

namespace Database\Factories\Utilities;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Utilities\Organisation;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Utilities\Organisation>
 */
class OrganisationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //            'name' => $this->faker->name(),
            'organisation_name' => $this->faker->company(),
        ];
    }
}
