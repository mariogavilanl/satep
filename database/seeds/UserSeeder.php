<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            'name' => 'Paula',

            'email' => 'mail@mail.com',
            'password' => '$2y$10$54zkhzP2Gg4ZioC/VqlNV..SJoeiN60K66Zw1/LK4piSJxdxHh61q',
            'roles_id' => '1'
        ]);

        DB::table('users')->insert([
            'name' => 'José',

            'email' => 'mail2@mail.com',
            'password' => '$2y$10$54zkhzP2Gg4ZioC/VqlNV..SJoeiN60K66Zw1/LK4piSJxdxHh61q',
            'roles_id' => '2'
        ]);


        DB::table('users')->insert([
            'name' => 'Roberto',

            'email' => 'mail3@mail.com',
            'password' => '$2y$10$54zkhzP2Gg4ZioC/VqlNV..SJoeiN60K66Zw1/LK4piSJxdxHh61q',
            'roles_id' => '1'
        ]);


        DB::table('users')->insert([
            'name' => 'Dr. OCHO MD',

            'email' => 'mail4@mail.com',
            'password' => '$2y$10$54zkhzP2Gg4ZioC/VqlNV..SJoeiN60K66Zw1/LK4piSJxdxHh61q',
            'roles_id' => '4'
        ]);


        DB::table('users')->insert([
            'name' => 'Supervisor',

            'email' => 'mail5@mail.com',
            'password' => '$2y$10$54zkhzP2Gg4ZioC/VqlNV..SJoeiN60K66Zw1/LK4piSJxdxHh61q',
            'roles_id' => '5'
        ]);    
        
        
    }
}
