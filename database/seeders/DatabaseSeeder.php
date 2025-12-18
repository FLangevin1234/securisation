<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Crayon;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $faker = Faker::create();
        foreach (range(1, 10) as $index) {
            Crayon::create([
                'nom' => $faker->randomElement(['Crayon de couleur', 'Crayon à papier', 'Crayon de cire'])." ".$faker->word." ".$faker->colorName,
                'quantite' => $faker->numberBetween(1, 100)
            ]);
        }
        \App\Models\User::factory()->create([
            'name' => 'Alice',
            'email' => 'alice@email.com',
            'password' => hash('sha512', 'B3$stP@$$w0rd1'),
        ]);
        \App\Models\User::factory()->create([
            'name' => 'Bob',
            'email' => 'bob@example.com',
            'password' => hash('sha512', 'SUuUuUp3rM@n')
        ]);
        \App\Models\User::factory()->create([
            'name' => 'Gordon',
            'email' => 'gb@mail.com',
            'password' => hash('sha512', '0n3Tw0ThRe3F0UrF1V3')
        ]);
    }
}
