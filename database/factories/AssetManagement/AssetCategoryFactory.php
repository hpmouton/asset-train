<?php

namespace Database\Factories\AssetManagement;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\AssetManagement\AssetCategory;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\AssetManagement\AssetCategory>
 */
class AssetCategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $categories = ['Furniture','Computers','Vehicles','Machinery','Electronics',
        ];

        return [
            //
            'category_name' => fake()->randomElement($categories)
        ];
    }
}
