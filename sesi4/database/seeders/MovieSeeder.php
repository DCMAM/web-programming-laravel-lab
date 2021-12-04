<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('movies')->insert([
            'title' => 'Harry Potter 1',
            'description' => 'First movie',
            'image' => 'images/1638592561.jpg',
        ]);
        DB::table('movies')->insert([
            'title' => 'Harry Potter 2',
            'description' => 'Second movie',
            'image' => 'images/1638592561.jpg',
        ]);
        DB::table('movies')->insert([
            'title' => 'Harry Potter 3',
            'description' => 'Third movie',
            'image' => 'images/1638592561.jpg',
        ]);
        DB::table('movies')->insert([
            'title' => 'Harry Potter 4',
            'description' => 'Fourth movie',
            'image' => 'images/1638592561.jpg',
        ]);
        DB::table('movies')->insert([
            'title' => 'Harry Potter 5',
            'description' => 'Fifth movie',
            'image' => 'images/1638592561.jpg',
        ]);
        DB::table('movies')->insert([
            'title' => 'Harry Potter 6',
            'description' => 'Sixth movie',
            'image' => 'images/1638592561.jpg',
        ]);
        DB::table('movies')->insert([
            'title' => 'Harry Potter 7',
            'description' => 'Seventh movie',
            'image' => 'images/1638592561.jpg',
        ]);
        DB::table('movies')->insert([
            'title' => 'Harry Potter 8',
            'description' => 'Eigth movie',
            'image' => 'images/1638592561.jpg',
        ]);
        DB::table('movies')->insert([
            'title' => 'Harry Potter 9',
            'description' => 'Ninth movie',
            'image' => 'images/1638592561.jpg',
        ]);
        DB::table('movies')->insert([
            'title' => 'Harry Potter 10',
            'description' => 'Tenth movie',
            'image' => 'images/1638592561.jpg',
        ]);
    }
}
