<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Information for a single product
        $product = new \App\Product([
            'imagePath' => 'https://images-na.ssl-images-amazon.com/images/I/61GMn0FD3IL._SX361_BO1,204,203,200_.jpg',
            'title' => 'Norse Gods and Giants',
            'description' => 'A book on Norse mythology for children. Filled with stories and illustrations for all to enjoy!',
            'price' => 12

        ]);
        // Saves the product to the database
        $product-save();
    }
}
