<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->randomElement([
                'Fresh Meat', 'Vegetables', 'Fruit & Nut Gifts', 'Fresh Berries', 'Ocean Foods', 
                'Butter & Eggs', 'Fastfood', 'Fresh Onion', 'Frozen Food', 'Papayaya & Crisps',
                'Oatmeal','Fresh Bananas'
            ]),
            'description' => fake()->sentence(),
            'tags' => collect([
                'Fresh', 'Organic', 'Healthy', 'Dairy', 'Frozen', 'Seafood'
            ])->random(2)->toArray(),
        ];
    }
}
