<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Product;

use Illuminate\Support\Facades\Storage;

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

        Storage::deleteDirectory('products');
        Storage::deleteDirectory('articles');

        Storage::makeDirectory('products');
        Storage::makeDirectory('articles');

        Product::factory(50)->create();
        Article::factory(50)->create();
    }
}
