<?php

use Illuminate\Database\Seeder;

class AgentesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('agentes')->insert([
            
            ['nombreAgente' => 'VIG PRIV',
            'glosaAgente' => 'VIGILANTE PRIVADO',
            'tipo' => 'salud compatible'],

            ['nombreAgente' => 'RUIDO',
            'glosaAgente' => 'RUIDO',
            'tipo' => 'PVMO'],

            ['nombreAgente' => 'SILICE',
            'glosaAgente' => 'SILICE',
            'tipo' => 'PVMO'],
            
            ['nombreAgente' => 'FO',
            'glosaAgente' => 'FORMAL DEIDO',
            'tipo' => 'PVMO'],

            ['nombreAgente' => 'CI',
            'glosaAgente' => 'CITOSTATICOS',
            'tipo' => 'PVMO'],

            ['nombreAgente' => 'AA',
            'glosaAgente' => 'AEROSOLES ACIDOS',
            'tipo' => 'PVMO'],

            ['nombreAgente' => 'SO2',
            'glosaAgente' => 'SO2',
            'tipo' => 'PVMO'],

            ['nombreAgente' => 'PLOMO',
            'glosaAgente' => 'PLOMO',
            'tipo' => 'PVMO'],

           
            ['nombreAgente' => 'AF',
            'glosaAgente' => 'ALTURA FISICA',
            'tipo' => 'salud compatible'],

            ['nombreAgente' => 'RAD 1 CAT',
            'glosaAgente' => 'RADIACION CATEGORIA 1',
            'tipo' => 'salud compatible'],

            ['nombreAgente' => 'RAD 2 Y 3',
            'glosaAgente' => 'RADIACION IONIZANTE 2 Y 3',
            'tipo' => 'salud compatible'],

            ['nombreAgente' => 'AG',
            'glosaAgente' => 'ALTURA GREOGRAFICA',
            'tipo' => 'salud compatible'],

            ['nombreAgente' => 'EC',
            'glosaAgente' => 'ESPACIO CONFINADOS',
            'tipo' => 'salud compatible'],

            ['nombreAgente' => 'OSC',
            'glosaAgente' => 'OPERADOR SALA CONTROL',
            'tipo' => 'salud compatible'],


            ['nombreAgente' => 'OEP',
            'glosaAgente' => 'OPERADOR EQUIPO PESADO',
            'tipo' => 'salud compatible'],

            ['nombreAgente' => 'OEL',
            'glosaAgente' => 'OPERADOR EQUIPO LIVIANO',
            'tipo' => 'salud compatible'],


            ['nombreAgente' => 'OE',
            'glosaAgente' => 'OXIDO ETILENIO',
            'tipo' => 'salud compatible'],


            ['nombreAgente' => 'AS',
            'glosaAgente' => 'ARSENICO',
            'tipo' => 'salud compatible'],


            ['nombreAgente' => 'VIG PRIV',
            'glosaAgente' => 'OPERADOR SALA CONTROL',
            'tipo' => 'salud compatible'],

            ['nombreAgente' => 'ENCUESTA AS',
            'glosaAgente' => 'ENCUESTA AS',
            'tipo' => 'salud compatible'],

            ['nombreAgente' => 'ENCUESTA FO',
            'glosaAgente' => 'ENCUESTA FO',
            'tipo' => 'salud compatible'],

            ['nombreAgente' => 'ENCUESTA CITO',
            'glosaAgente' => 'ENCUESTA CITO',
            'tipo' => 'salud compatible'],

         
         
            ]);
    }
}
