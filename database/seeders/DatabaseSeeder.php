<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(10)->create();
        \App\Models\Utilities\Organisation::factory(1)->create();
        \App\Models\Utilities\Department::factory(6)->create();
        \App\Models\Utilities\Division::factory(10)->create();

        \App\Models\AssetManagement\AssetCategory::factory(5)->create();
        \App\Models\AssetManagement\Asset::factory(200)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
