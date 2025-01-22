<?php

namespace Database\Seeders;

use App\Models\Files;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FilesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Files::query()->insert(
            [
                [
                    'path' => 'sdad',
                    'name' => 'coolName',
                    'parent_id' => '1',
                    'parent_type' => 'App\Models\Product',
                ],
                [
                    'path' => 'fdsfsdf',
                    'name' => 'coolName1',
                    'parent_id' => '1',
                    'parent_type' => 'App\Models\Product',
                ],
                [
                    'path' => 'fdsafasf',
                    'name' => 'coolName',
                    'parent_id' => '1',
                    'parent_type' => 'App\Models\SubProduct',
                ],
            ]
        );
    }
}
