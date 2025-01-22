<?php

namespace Database\Seeders;

use App\Models\SubProduct;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SubProduct::query()->insert(
            [
                [
                    'name' => 'sub_bruh',
                    'product_id' => 1
                ],
                [
                    'name' => 'sub_bruh1',
                    'product_id' => 1
                ],
                [
                    'name' => 'sub_bruh2',
                    'product_id' => 1
                ],
                [
                    'name' => 'sub_bruh',
                    'product_id' => 2
                ],
                [
                    'name' => 'sub_bruh',
                    'product_id' => 2
                ],
            ]
        );
    }
}
