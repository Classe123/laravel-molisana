<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = config('db.products');
        foreach ($products as $product) {
            $new_product = new Product();
            $new_product->title = $product['titolo'];
            $new_product->description = $product['descrizione'];
            $new_product->type = $product['tipo'];
            $new_product->image = $product['src'];
            $new_product->cooking_time = $product['cottura'];
            $new_product->weight = $product['peso'];
            $new_product->save();

        }
    }
}
