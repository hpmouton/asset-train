<?php

namespace Database\Factories\Utilities;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Utilities\Department;
use App\Models\Utilities\Organisation;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Utilities\Department>
 */
class DepartmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'department_name' => fake()->randomElement(['Human Resources', 'Risk Management', 'Commercial', 'Marketing'.'Finance', 'Executive', 'Governance Support', 'Technical and Information']),
            'org_id' =>  Organisation::inRandomOrder()->first(),


        ];
    }
}
