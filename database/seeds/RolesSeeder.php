<?php

use Illuminate\Database\Seeder;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('roles')->insert([
            'id' => 1,
            'nombreRol' => 'Rol-1'
        ]);
        DB::table('roles')->insert([
            'id' => 2,
            'nombreRol' => 'Rol-2'
        ]);
        DB::table('roles')->insert([
            'id' => 3,
            'nombreRol' => 'Rol-3'
        ]);
        DB::table('roles')->insert([
            'id' => 4,
            'nombreRol' => 'Doctor'
        ]);
        DB::table('roles')->insert([
            'id' => 5,
            'nombreRol' => 'Supervisor'
        ]);                        
    }
}
