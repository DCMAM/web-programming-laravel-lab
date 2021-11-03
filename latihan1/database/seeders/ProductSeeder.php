<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // associative array ['key' -> 'value']
        DB::table('products')->insert([
            'name' => 'nasi goreng',
            'product_type_id' => 1
        ]);
    }
}
