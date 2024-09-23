<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    { 
            return [
                'text' => fake()->randomElement([
                    'Beef Steak', 'Carrots', 'Mixed Nuts Box', 'Blueberries', 'Salmon Fillets', 
                    'Butter', 'Eggs', 'Cheeseburger', 'Red Onions', 'Frozen Pizza', 
                    'Papaya Slices', 'Oatmeal Pack', 'Bananas Bunch'
                ]),
                'picture' => fake()->randomElement([
                    'assets/img/products/1.png',
                ]),
                'summary' => fake()->text(180),  
                'quantity' => fake()->randomFloat(0, 5, 30), 
                'description' => fake()->paragraph(), 
                'discount_type' => fake()->randomElement(['percentage', 'fixed amount']),
                'discount_value' => fake()->randomFloat(2, 5, 30), 
                'tags' => collect([
                    'Fresh', 'Vegetarian', 'Gluten-Free', 'Organic', 'Frozen', 'Seasonal'
                ])->random(3)->toArray(),
            ];
        }      
}
