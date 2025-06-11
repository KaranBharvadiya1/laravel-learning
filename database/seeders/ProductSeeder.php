<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create 100 products using the factory
        Product::factory()->count(100)->create();
        // Product::create([
        //     'name' => 'iphone 15 Pro',
        //     'description' => 'The iPhone 15 Pro is a high-end smartphone with advanced features and capabilities.',
        //     'price' => 999.99,
        // ]);
    }
}
