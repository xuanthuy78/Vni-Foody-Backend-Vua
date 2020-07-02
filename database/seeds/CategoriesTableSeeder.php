<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert(
            [
                [
                    'name' =>'Thực đơn chính',
                    'parent_id'  => '0',
                    'created_at'   => DB::raw('now()'),
                    'updated_at'   => DB::raw('now()'),
                ],
                [
                    'name' =>'Thực đơn đặc biệt',
                    'parent_id'  => '1',
                    'created_at'   => DB::raw('now()'),
                    'updated_at'   => DB::raw('now()'),  
                ],
                [
                    'name' =>'Món khai vị',
                    'parent_id'  => '2',
                    'created_at'   => DB::raw('now()'),
                    'updated_at'   => DB::raw('now()'),  
                ],
                [
                    'name' =>'Pizza',
                    'parent_id'  => '3',
                    'created_at'   => DB::raw('now()'),
                    'updated_at'   => DB::raw('now()'),  
                ],

            ]
                );
    }
}
