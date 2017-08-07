<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$faker = Faker\Factory::create();
        $limit = 30;

        for ($i=0; $i < $limit; $i++) {
	        DB::table('users')->insert([
	        	'first_name'=>$faker->name,
	        	'last_name'=>$faker->lastname,
	        	'email'=>$faker->email,
	        	'user_name'=>str_random(10),
	        	'user_password'=>bcrypt('secret'),

	        ]);
	    }    
    }
}
