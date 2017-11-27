<?php

use Illuminate\Database\Seeder;
use App\User;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::create([
            'name' => 'Sett Wai Aung',
            'email' => 'swa@gmail.com',
            'is_writer' => 1,
            'password' => bcrypt('123123')
        ]);

        User::create([
            'name' => 'Ba Ba',
            'email' => 'ba@gmail.com',
            'is_writer' => 1,
            'password' => bcrypt('123123')
        ]);

        User::create([
            'name' => 'Saung Wai Act',
            'email' => 'ha@gmail.com',
            'is_writer' => 1,
            'password' => bcrypt('123123')
        ]);
    }
}
