<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'title' => 'Technology'
        ]);

        DB::table('categories')->insert([
            'title' => 'News'
        ]);

        DB::table('categories')->insert([
            'title' => 'Article'
        ]);

        DB::table('categories')->insert([
            'title' => 'Crime'
        ]);

        DB::table('categories')->insert([
            'title' => 'Politics'
        ]);
    }
}
