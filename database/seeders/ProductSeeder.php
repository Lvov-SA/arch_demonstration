<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::query()->insert(
            [
                [
                    'name' => 'bruh',
                    'consumer' => 'consumer_bruh'
                ],
                [
                    'name' => 'bruh1',
                    'consumer' => 'consumer_bruh1'
                ],
                [
                    'name' => 'bruh3',
                    'consumer' => 'consumer_bruh3'
                ],
                [
                    'name' => 'bruh4',
                    'consumer' => 'consumer_bruh4'
                ],
                [
                    'name' => 'bruh5',
                    'consumer' => 'consumer_bruh5'
                ],
                [
                    'name' => 'bruh6',
                    'consumer' => 'consumer_bruh6'
                ]
            ]
        );
    }
}
