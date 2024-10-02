<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Department;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            [
                'department_id' => 1,
                'name' => 'Beef',
                'picture' => 'assets/website/img/categories/beef.jpg',
                'tags' => ['beef', 'meat', 'protein']
            ],
            [
                'department_id' => 1,
                'name' => 'Chicken',
                'picture' => 'assets/website/img/categories/chicken.jpg',
                'tags' => ['chicken', 'poultry', 'protein']
            ],
            [
                'department_id' => 2,
                'name' => 'Leafy Greens',
                'picture' => 'assets/website/img/categories/leafy-greens.jpg',
                'tags' => ['vegetables', 'leafy', 'organic']
            ],
            [
                'department_id' => 2,
                'name' => 'Root Vegetables',
                'picture' => 'assets/website/img/categories/root-vegetables.jpg',
                'tags' => ['vegetables', 'root', 'organic']
            ],
            [
                'department_id' => 3,
                'name' => 'Mixed Nuts',
                'picture' => 'assets/website/img/categories/mixed-nuts.jpg',
                'tags' => ['nuts', 'snacks', 'gifts']
            ],
            [
                'department_id' => 3,
                'name' => 'Dried Fruits',
                'picture' => 'assets/website/img/categories/dried-fruits.jpg',
                'tags' => ['fruits', 'dried', 'healthy']
            ],
            [
                'department_id' => 4,
                'name' => 'Strawberries',
                'picture' => 'assets/website/img/categories/strawberries.jpg',
                'tags' => ['berries', 'strawberries', 'fresh']
            ],
            [
                'department_id' => 4,
                'name' => 'Blueberries',
                'picture' => 'assets/website/img/categories/blueberries.jpg',
                'tags' => ['berries', 'blueberries', 'fresh']
            ],
            [
                'department_id' => 5,
                'name' => 'Fresh Fish',
                'picture' => 'assets/website/img/categories/fresh-fish.jpg',
                'tags' => ['seafood', 'fish', 'fresh']
            ],
            [
                'department_id' => 5,
                'name' => 'Shrimp & Prawns',
                'picture' => 'assets/website/img/categories/shrimp.jpg',
                'tags' => ['seafood', 'shrimp', 'fresh']
            ],
            [
                'department_id' => 6,
                'name' => 'Butter',
                'picture' => 'assets/website/img/categories/butter.jpg',
                'tags' => ['dairy', 'butter', 'spread']
            ],
            [
                'department_id' => 6,
                'name' => 'Eggs',
                'picture' => 'assets/website/img/categories/eggs.jpg',
                'tags' => ['dairy', 'eggs', 'protein']
            ],
            [
                'department_id' => 7,
                'name' => 'Burgers',
                'picture' => 'assets/website/img/categories/burgers.jpg',
                'tags' => ['fastfood', 'burgers', 'snacks']
            ],
            [
                'department_id' => 7,
                'name' => 'Pizza',
                'picture' => 'assets/website/img/categories/pizza.jpg',
                'tags' => ['fastfood', 'pizza', 'snacks']
            ],
            [
                'department_id' => 8,
                'name' => 'Onions',
                'picture' => 'assets/website/img/categories/onions.jpg',
                'tags' => ['vegetables', 'onion', 'fresh']
            ],
            [
                'department_id' => 9,
                'name' => 'Frozen Pizza',
                'picture' => 'assets/website/img/categories/frozen-pizza.jpg',
                'tags' => ['frozen', 'pizza', 'convenient']
            ],
            [
                'department_id' => 9,
                'name' => 'Frozen Vegetables',
                'picture' => 'assets/website/img/categories/frozen-vegetables.jpg',
                'tags' => ['frozen', 'vegetables', 'convenient']
            ],
            [
                'department_id' => 10,
                'name' => 'Papaya Chips',
                'picture' => 'assets/website/img/categories/papaya-chips.jpg',
                'tags' => ['snacks', 'papaya', 'healthy']
            ],
            [
                'department_id' => 10,
                'name' => 'Crisps',
                'picture' => 'assets/website/img/categories/crisps.jpg',
                'tags' => ['snacks', 'crisps', 'junkfood']
            ],
            [
                'department_id' => 11,
                'name' => 'Oatmeal Cereal',
                'picture' => 'assets/website/img/categories/oatmeal-cereal.jpg',
                'tags' => ['breakfast', 'oatmeal', 'healthy']
            ],
            [
                'department_id' => 12,
                'name' => 'Fresh Bananas',
                'picture' => 'assets/website/img/categories/bananas.jpg',
                'tags' => ['fruits', 'bananas', 'fresh']
            ],
            [
                'department_id' => 12,
                'name' => 'Dried Bananas',
                'picture' => 'assets/website/img/categories/dried-bananas.jpg',
                'tags' => ['fruits', 'bananas', 'dried']
            ],
            [
                'department_id' => 13,
                'name' => 'Dried Apricots',
                'picture' => 'assets/website/img/categories/dried-apricots.jpg',
                'tags' => ['fruits', 'apricots', 'dried']
            ],
            [
                'department_id' => 14,
                'name' => 'Fresh Apples',
                'picture' => 'assets/website/img/categories/fresh-apples.jpg',
                'tags' => ['fruits', 'apples', 'fresh']
            ],
            [
                'department_id' => 15,
                'name' => 'Apple Juice',
                'picture' => 'assets/website/img/categories/apple-juice.jpg',
                'tags' => ['drinks', 'juice', 'apple']
            ],
        ];

        foreach ($categories as $item) {
            $category = Category::create([
                'department_id' => $item['department_id'],
                'name' => $item['name'],
                'picture' => $item['picture'],
                'is_active' => 1,
            ]);

            $category->attachTags($item['tags']);
        }
    }
}
