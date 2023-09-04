<?php

namespace Database\Factories\AssetManagement;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\AssetManagement\Asset;
use  App\Models\AssetManagement\AssetCategory;
use App\Models\Utilities\Division;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\AssetManagement\Asset>
 */
class AssetFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $assetNames = [
            'Desktop Computer',
            'Conference Table',
            'Company Car',
            'Laptop',
            'Office Chair',
            'Projector',
            'Server Rack',
            'Printer',
            'Mobile Phone',
            'Whiteboard',
            'Desk Lamp',
            'Bookshelf',
            'Coffee Machine',
            'Conference Phone',
            'File Cabinet',
            'Scanner',
            'Tablet',
            'Security Camera',
            'Air Conditioning Unit',
            'Water Cooler',
        ];
        $manufacturers = [
            'Dell',
            'HP',
            'Lenovo',
            'Apple',
            'Microsoft',
            'Samsung',
            'Sony',
            'Acer',
            'Asus',
            'Toshiba',
            'IBM',
            'Toyota',
            'Ford',
            'Honda',
            'Nissan',
            'Volkswagen',
            'BMW',
            'Sony',
            'LG',
            'Panasonic',
            // Add more manufacturers as needed
        ];


        return [
            //
            'name' => fake()->randomElement($assetNames),
            'description' => fake()->realText($maxNbChars = 60, $indexSize = 2),
            'category_id' => AssetCategory::inRandomOrder()->first(),
            'acquisition_date' => fake()->dateTime(),
            'division_id' => Division::inRandomOrder()->first(),
            'manufacturer' => fake()->randomElement($manufacturers),
            'serial_number' => fake()->regexify('[A-Z]{5}[0-4]{3}'),
            'status' => fake()->randomDigitNotNull()



        ];
    }
}
