<?php

namespace Database\Factories\Utilities;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Utilities\Division;
use App\Models\Utilities\Department;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Utilities\Division>
 */
class DivisionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'division_name' => fake()->randomElement(['Switchboard','Customer Contact Centre','iWay','Internal Audit & Risk Management','Technical Operations', 'Legal Services & Regulatory Affairs', 'Finance & Administration',' Marketing','Human Resource & Strategic Training','Commercial Operations']),
            'division_location' => $this->faker->state(),
            'dep_id' =>  Department::inRandomOrder()->first(),
        ];
    }
}
