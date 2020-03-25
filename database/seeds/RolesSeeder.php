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
            'nombreRol' => 'Rol-1'
        ]);
        DB::table('roles')->insert([
            'nombreRol' => 'Rol-2'
        ]);
        DB::table('roles')->insert([
            'nombreRol' => 'Rol-3'
        ]);
        DB::table('roles')->insert([
            'nombreRol' => 'Doctor'
        ]);                        
    }
}
