<?php

use Illuminate\Database\Seeder;
use App\Article;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$faker = Faker\Factory::create();

    	$array = [1, 2, 3, 4, 5];
    	$user = [1, 2, 3];

    	for ($i=0; $i < 50 ; $i++) { 
    		Article::create([
    			'title' => $faker->sentence,
    			'user_id' => array_random($user),
    			'body' => $faker->text,
    			'category_id' => array_random($array)
    		]);
    	}
    }
}
