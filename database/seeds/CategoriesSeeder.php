<?php

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name' => 'Laços',
            'description' => 'Laços para cabelo',
            'slug' => 'lacos'
        ]);

        DB::table('categories')->insert([
            'name' => 'Tiaras',
            'description' => 'Tiaras para cabelo',
            'slug' => 'tiaras'
        ]);

        DB::table('categories')->insert([
            'name' => 'Viseiras',
            'description' => 'Viseiras para cabelo',
            'slug' => 'viseiras'
        ]);

        DB::table('categories')->insert([
            'name' => 'Faixas',
            'description' => 'Faixas para bebe',
            'slug' => 'faixas'
        ]);

        factory(Category::class, 10);
    }
}
