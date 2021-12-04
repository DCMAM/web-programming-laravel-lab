<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EpisodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('episodes')->insert([
//           'id' => '1',
           'movie_id' => '1',
           'episode' => 'Episode 1',
           'title' => 'Introduction'
        ]);
        DB::table('episodes')->insert([
//            'id' => '1',
            'movie_id' => '1',
            'episode' => 'Episode 2',
            'title' => 'Introduction 2'
        ]);
        DB::table('episodes')->insert([
//            'id' => '2',
            'movie_id' => '2',
            'episode' => 'Episode 1',
            'title' => 'Introduction'
        ]);
        DB::table('episodes')->insert([
//            'id' => '1',
            'movie_id' => '1',
            'episode' => 'Episode 3',
            'title' => 'Final'
        ]);
    }
}
