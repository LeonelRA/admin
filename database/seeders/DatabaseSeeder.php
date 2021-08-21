<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Discount;
use App\Models\Product;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Category::create(['name' => 'remeras']);
        Category::create(['name' => 'camperas']);
        Category::create(['name' => 'pantalones']);
        Category::create(['name' => 'gorras']);
        Category::create(['name' => 'mochilas']);
        Category::create(['name' => 'Sombreros']);
        Category::create(['name' => 'Muñequeras']);
        Category::create(['name' => 'Medias']);

        $discounts = Discount::factory(40)->create();

        $products = Product::factory(50)
            ->make()
            ->each(function ($product){
                $categories = Category::all();
                $product->category_id = $categories->random()->id;
                $product->save();
            });

    }
}
