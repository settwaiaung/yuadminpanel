<?php

use Illuminate\Database\Seeder;
use App\Report;
class ReportsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$user= [1, 2, 3];
    	$faker = Faker\Factory::create();

    	for ($i=0; $i < 50; $i++) { 
    		Report::create([
    			'title' => $faker->sentence,
    			'body' => $faker->sentence,
    			'user_id' => array_random($user)
    		]);
    	}


    }
}
