<?php

namespace Database\Seeders;

use App\Http\Controllers\MovieController;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(MovieSeeder::class);
        $this->call(EpisodeSeeder::class);
    }
}
