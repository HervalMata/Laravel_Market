<?php

use App\Models\Color;
use App\Models\Material;
use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $colors = Color::all();
        $materials = Material::all();
        factory(Product::class, 50)
            ->create()
            ->each(function (Product $product) use($colors, $materials) {
                for($i=1; $i<6; $i++)
                {
                    $color_id = $colors->random()->id;
                    $material_id = $materials->random()->id;
                    $product->colors()->attach($color_id);
                    $product->materials()->attach($material_id);
                }
            })
        ;
    }
}
