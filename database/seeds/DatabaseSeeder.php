<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $this->call(OrdersTableSeeder::class);
         $this->call(PagesTableSeeder::class);
         $this->call(ProductsTableSeeder::class);

         $this->call(CategoriesTableSeeder::class);
    }
}
