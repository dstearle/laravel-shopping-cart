<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // A list of products to seed the database
        $this->call(ProductTableSeeder::class);
    }
}
