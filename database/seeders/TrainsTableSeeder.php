<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
use Faker\Factory as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for ($i = 0; 0 < 50; $i++) {
            Train::create([
                'azienda' => $faker->company,
                'stazione_partenza' => $faker->city,
                'data_partenza' => $faker->date('Y-m-d'),
                'stazione_arrivo' => $faker->city,
                'orario_partenza' => $faker->time('H:i:s'),
                'orario_arrivo' => $faker->time('H:i:s'),
                'codice_treno' => $faker->numerify('#####'),
                'numero_carrozze' => $faker->numberBetween(5, 15),
                'in_orario' => $faker->boolean,
                'cancellato' => $faker->boolean,
            ]);
        }
    }
}
