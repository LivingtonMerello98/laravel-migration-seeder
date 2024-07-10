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

        for ($i = 0; 0 <= 50; $i++) {
            Train::create([
                'azienda' => $faker->company,
                'stazione_partenza' => $faker->city,
                'data_partenza' => $faker->date('Y_m_d'),
                'stazione_arrivo' => $faker->city,
                'orario_arrivo' => $faker->time,
                'codice_treno' => $faker->numerify('#####'),
                'numero_carrozze' => $faker->numberBetween(1, 15),
                'in_orario' => $faker->boolean,
                'cancellato' => $faker->boolean,
            ]);
        }
    }
}
