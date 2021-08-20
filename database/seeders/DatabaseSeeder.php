<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB ;
use Faker\Factory as Faker;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {   
        $faker = Faker :: create() ;
        foreach(range(1,1000) as $index){
            DB::table('users')->insert([
                'name' =>$faker->name ,
                'email' =>$faker->email ,
                'password' =>bcrypt('secret') 
            ]);

        }
        // \App\Models\User::factory(10)->create();
    }
}
