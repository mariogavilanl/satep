<?php

use Illuminate\Database\Seeder;
use Faker\Generate as Faker;

class CargaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker::generate();
        $boleano = [true, false];
        $sexo = ["F", "M"];
        $cargos = [
            'Programador',
            'Brogrammer',
            'Analista',
            'Cantante',
            'Electricista',
        ];

        $gerencias = [

            'Norte',
            'NortWest',
            'IronMountain',
            'StormWind',
            'Gnomeregan',
            'Carcosa'
        ];

        for ($i=0; $i <= 10 ; $i++) { 
            
            DB::table('cargas')->insert([
                'nroSap' => rand(1,5000),
                'rut' => (number_format(rand(8000000,25000000), 0, ',', '.').'-'.rand(0,9)),
	            'primerNombre' => $faker->firstNameMale,
                'segundoNombre' => $faker->firstNameMale,   
                'primerApellido' => $faker->lastName,
                'segundoApellido' => $faker->lastName,
                'cargo' => $cargos[rand(0,4)],
                'gerencia' => $gerencias[rand(0, 5)],
                'agentes_id' => rand(1, 19),
                'semestre' => rand(1,4),
                'co' => false,
                'fechaNacimiento' => $faker->dateTimeBetween($startDate = '-30 years', $endDate = 'now', $timezone = null),
                'fechaCarga' => '' ,
                'sexo' => $sexo[rand(0,1)],
                'idEncuesta' => 0,
                'idEncuesta' => 0,
                'idEncuesta' => 0,
                'idEncuesta' => 0
               
                
	        ]);


        }
    }
}