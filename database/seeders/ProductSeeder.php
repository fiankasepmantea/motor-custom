<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::insert([
            [
                'name' => 'Custom Cafe Racer 250cc',
                'description' => 'Motor custom gaya cafe racer klasik',
                'price' => 35000000,
                'image' => 'https://via.placeholder.com/300x200',
                'category_id' => 1
            ],
            [
                'name' => 'Custom Scrambler 300cc',
                'description' => 'Motor custom untuk off-road ringan',
                'price' => 42000000,
                'image' => 'https://via.placeholder.com/300x200',
                'category_id' => 2
            ],
            [
                'name' => 'Custom Chopper 500cc',
                'description' => 'Motor custom panjang dan stylish',
                'price' => 55000000,
                'image' => 'https://via.placeholder.com/300x200',
                'category_id' => 3
            ],
            [
                'name' => 'Custom Tracker 200cc',
                'description' => 'Motor custom ringan dan fleksibel',
                'price' => 30000000,
                'image' => 'https://via.placeholder.com/300x200',
                'category_id' => 4
            ],
        ]);
    }
}
