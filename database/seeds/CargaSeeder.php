<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Carbon\Carbon;

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
        DB::table('cargas')->truncate();

        $faker = Faker::create();
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

            'Gerencia Fundición',
            'Gerencia Proyecto',
            'Gerencia SSO',
            'Gerencia RMD',
            'Gerencia Talleres',
            'Gerencia MSS'
        ];

        $correos = ["mariogavilan.l@gmail.com", "decheverriavs@gmail.com"];


        for ($i=0; $i <= 25 ; $i++) { 
            
            DB::table('cargas')->insert([
                'nroSap' => rand(1,5000),
                'rut' => (number_format(rand(8000000,25000000), 0, ',', '.').'-'.rand(0,9)),
	            'primerNombre' => 'FIJO',
                'segundoNombre' => $faker->firstNameMale,   
                'primerApellido' => $faker->lastName,
                'segundoApellido' => $faker->lastName,
                'cargo' => $cargos[rand(0,4)],
                'email' => $correos[rand(0,1)],
                'gerencia' => $gerencias[rand(0, 5)],
                'agentes_id' => 18,
                'semestre' => rand(1,4),
                'co' => false,
                'fechaNacimiento' => $faker->dateTimeBetween($startDate = '-30 years', $endDate = 'now', $timezone = null),
                'fechaCarga' => Carbon::now(),
                'sexo' => $sexo[rand(0,1)],
                'idEncuesta' => 0,
                'encuesta' => 0,
                'idAntecedentes' => 0,
                'antecedentes' => 0
	        ]);
    }

        for ($i=0; $i <= 30 ; $i++) { 
            
            DB::table('cargas')->insert([
                'nroSap' => rand(1,5000),
                'rut' => (number_format(rand(8000000,25000000), 0, ',', '.').'-'.rand(0,9)),
	            'primerNombre' => $faker->firstNameMale,
                'segundoNombre' => $faker->firstNameMale,   
                'primerApellido' => $faker->lastName,
                'segundoApellido' => $faker->lastName,
                'email' => $correos[rand(0,1)],
                'cargo' => $cargos[rand(0,4)],
                'gerencia' => $gerencias[rand(0, 5)],
                'agentes_id' => rand(1, 19),
                'semestre' => rand(1,4),
                'co' => false,
                'fechaNacimiento' => $faker->dateTimeBetween($startDate = '-30 years', $endDate = 'now', $timezone = null),
                'fechaCarga' => Carbon::now(),
                'sexo' => $sexo[rand(0,1)],
                'idEncuesta' => 0,
                'encuesta' => 0,
                'idAntecedentes' => 0,
                'antecedentes' => 0
	        ]);
        }
    
}
}
