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
        // Product 1
        // Creates a new product
        $product = new \App\Product([
            'imagePath' => 'https://images-na.ssl-images-amazon.com/images/I/61GMn0FD3IL._SX361_BO1,204,203,200_.jpg',
            'title' => 'Norse Gods and Giants',
            'description' => 'A book on Norse mythology for children. Filled with stories and illustrations for all to enjoy!',
            'price' => 12

        ]);
        // Saves the product to the database
        $product-save();

        // Product 2
        // Creates a new product
        $product = new \App\Product([
            'imagePath' => 'https://images-na.ssl-images-amazon.com/images/I/51WvPSOaHkL._SX361_BO1,204,203,200_.jpg',
            'title' => 'The Illustrated Book of Myths',
            'description' => 'A collection of stories from various mthologies around the world.',
            'price' => 20

        ]);
        // Saves the product to the database
        $product-save();

        // Product 3
        // Creates a new product
        $product = new \App\Product([
            'imagePath' => 'https://images.penguinrandomhouse.com/cover/9780449014165?width=400',
            'title' => 'Greek Myths',
            'description' => 'A book on Greek mythology for children. Filled with stories and illustrations for all to enjoy!',
            'price' => 12

        ]);
        // Saves the product to the database
        $product-save();

        // Product 4
        // Creates a new product
        $product = new \App\Product([
            'imagePath' => 'https://images-na.ssl-images-amazon.com/images/I/A1ZQSno9fGL.jpg',
            'title' => 'Treasury of Egyptian Mythology',
            'description' => 'The gods, godesses, and fantastic creatures of ancient Egypt.',
            'price' => 15

        ]);
        // Saves the product to the database
        $product-save();

        // Product 5
        // Creates a new product
        $product = new \App\Product([
            'imagePath' => 'https://images.secondsale.com/images/f4b49cdc3ec022d8b6607ec6dfa86271.jpg',
            'title' => 'Tales of the Greek Heroes',
            'description' => 'Learn about the great heroes of ancient such as Perseus and Hercules in this collection of tales.',
            'price' => 12

        ]);
        // Saves the product to the database
        $product-save();
    }
}
