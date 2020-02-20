<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
            ['name' => 'Phone', 'slug' => 'phone'],
            ['name' => 'Tablet', 'slug' => 'tablet'],
            ['name' => 'Laptop', 'slug' => 'laptop'],
            ['name' => 'Headphone', 'slug' => 'headphone']
        ]);
    }
}
