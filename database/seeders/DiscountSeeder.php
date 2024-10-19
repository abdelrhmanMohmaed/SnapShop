<?php

namespace Database\Seeders;

use App\Models\Discount;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory;

class DiscountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Factory::create(); // إنشاء كائن Faker

        $numberOfDiscounts = 20;

        for ($i = 0; $i < $numberOfDiscounts; $i++) {
            Discount::create([
                'product_id' => Product::inRandomOrder()->first()->id,
                'type' => $faker->randomElement(['percentage', 'fixed']),
                'value' => $faker->randomFloat(2, 1, 100), 
                'start_date' => $faker->dateTimeBetween('-1 month', 'now'),
                'end_date' => $faker->dateTimeBetween('now', '+1 month'),
            ]);
        }
    }
}
