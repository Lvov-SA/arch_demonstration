<?php

namespace Database\Seeders;

use App\Models\User;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         User::factory(10)->create();
        User::query()
            ->insert([
                    'name' => 'foo',
                    'email' => 'email@ro.ru',
                    'password' => Hash::make('123')
                ]
            );
        echo 'Токен для апи: '.User::query()->where('email','email@ro.ru')->first()->createToken('cool')->plainTextToken;
        $this->call([
            FilesSeeder::class,
            ProductSeeder::class,
            SubProductSeeder::class,
        ]);
    }
}
