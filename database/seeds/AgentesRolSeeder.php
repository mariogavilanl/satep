<?php

use Illuminate\Database\Seeder;

class AgentesRolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for ($i=1; $i <= 19 ; $i++) { 
            # code...
            DB::table('rol__agentes')->insert([
                
                "roles_id" => 1,
                "agentes_id" => $i,

            ]);
            DB::table('rol__agentes')->insert([
                
                "roles_id" => 2,
                "agentes_id" => $i,

            ]);
        }       
        
    }
}
