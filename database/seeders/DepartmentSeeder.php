<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Department;
use Spatie\Tags\Tag;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $departments = [
            [
                'name' => 'Fresh Meat',
                'picture' => 'assets/website/img/departments/feature-1.jpg',
                'tags' => ['meat', 'fresh', 'protein'],
            ],
            [
                'name' => 'Vegetables',
                'picture' => 'assets/website/img/departments/feature-1.jpg',
                'tags' => ['vegetables', 'healthy', 'organic'],
            ],
            [
                'name' => 'Fruit & Nut Gifts',
                'picture' => 'assets/website/img/departments/feature-1.jpg',
                'tags' => ['fruit', 'nuts', 'gifts'],
            ],
            [
                'name' => 'Fresh Berries',
                'picture' => 'assets/website/img/departments/feature-1.jpg',
                'tags' => ['berries', 'fresh', 'snacks'],
            ],
            [
                'name' => 'Ocean Foods',
                'picture' => 'assets/website/img/departments/feature-1.jpg',
                'tags' => ['seafood', 'fresh', 'healthy'],
            ],
            [
                'name' => 'Butter & Eggs',
                'picture' => 'assets/website/img/departments/feature-1.jpg',
                'tags' => ['dairy', 'butter', 'eggs'],
            ],
            [
                'name' => 'Fast Food',
                'picture' => 'assets/website/img/departments/feature-1.jpg',
                'tags' => ['fastfood', 'junkfood'],
            ],
            [
                'name' => 'Fresh Onion',
                'picture' => 'assets/website/img/departments/feature-1.jpg',
                'tags' => ['onion', 'fresh', 'vegetable'],
            ],
            [
                'name' => 'Frozen Food',
                'picture' => 'assets/website/img/departments/feature-1.jpg',
                'tags' => ['frozen', 'convenient'],
            ],
            [
                'name' => 'Papaya & Crisps',
                'picture' => 'assets/website/img/departments/feature-1.jpg',
                'tags' => ['snacks', 'papaya'],
            ],
            [
                'name' => 'Oatmeal',
                'picture' => 'assets/website/img/departments/feature-1.jpg',
                'tags' => ['breakfast', 'oatmeal', 'healthy'],
            ],
            [
                'name' => 'Fresh Bananas',
                'picture' => 'assets/website/img/departments/feature-1.jpg',
                'tags' => ['banana', 'fresh', 'fruit'],
            ],
            [
                'name' => 'Dried Fruit',
                'picture' => 'assets/website/img/departments/feature-1.jpg',
                'tags' => ['driedfruit', 'snacks', 'healthy'],
            ],
            [
                'name' => 'Fresh Fruit',
                'picture' => 'assets/website/img/departments/feature-1.jpg',
                'tags' => ['fruit', 'fresh', 'organic'],
            ],
            [
                'name' => 'Drink Fruits',
                'picture' => 'assets/website/img/departments/feature-1.jpg',
                'tags' => ['juice', 'fruit', 'drink'],
            ],
        ];

        foreach ($departments as $item) {
            $department = Department::create([
                'name' => $item['name'],
                'picture' => $item['picture'],
                'is_active' => 1,
            ]);

            $department->attachTags($item['tags']);
        }
    }
}
