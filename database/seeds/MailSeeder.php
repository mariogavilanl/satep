<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class MailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
                
        public function run()
        {
            $faker = Faker::create();
            for ($i=0; $i < 50; $i++) {
             \DB::table('cargas')->insert(array(
                     $faker = Faker::create();
                     $mail = [
                     $faker->email;
                     'name' => $faker->name,
                     'email' => $faker->email,
                        //'email' => $faker->unique()->safeEmail,
                       //  'email_verified_at' => now(),

                   
                       
                ];
    ));
    
        
         }
}

}