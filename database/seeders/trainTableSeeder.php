<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\train;
class trainTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = faker::create();
        for ($i = 0 ; $i <=10 ; $i++){
            train::create([
                'azienda' => $faker->name,
                'stazione_di_partenza'=> $faker->city,
                'stazione_di_arrivo'=>$faker->city,
                'orario_di_partenza'=>$faker->dateTime,
                'orario_di_arrivo'=>$faker->dateTime,
                'codice_treno'=>$faker->phoneNumber,
                'numero_carrozze'=>rand(1,100),
                'in_orario'=>rand(0,1),
                'cancellato'=>rand(0,1),
            ]);
        }
    }
}
