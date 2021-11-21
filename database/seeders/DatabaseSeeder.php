<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use App\Models\Property;
use Illuminate\Database\Seeder;
use Prophecy\Call\Call;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        Category::truncate();
        Product::truncate();
        Property::truncate();
        Category::factory(10)->create();
        Product::factory(20)->create();
        Property::factory(30)->create();

        $this->call([
            RoleUserSeeder::class
        ]);
    }
}
