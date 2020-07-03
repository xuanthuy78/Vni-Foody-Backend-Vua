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
         $this->call(NewsTableSeeder::class);
         $this->call(UsersTableSeeder::class);
         $this->call(SlidesTableSeeder::class);
         $this->call(OrdersTableSeeder::class);
         $this->call(PartnersTableSeeder::class);
         $this->call(ProductsTableSeeder::class);
         $this->call(CommentsTableSeeder::class);
         $this->call(ContactsTableSeeder::class);
         $this->call(CategoriesTableSeeder::class);
         $this->call(NewCategoriesTableSeeder::class);
         $this->call(OrderDetailsTableSeeder::class);
    }
}
