<?php

use Illuminate\Database\Seeder;

class NewCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('new_categories')->insert(
            [
                [
                    'name'=>'Tin khuyến mãi',
                    'parent_id'=>'1',
                    'display_order'=>'1',
                    'created_at'   => DB::raw('now()'),
                    'updated_at'   => DB::raw('now()'),
                ],
                [
                    'name'=>'Tin nổi bật',
                    'parent_id'=>'2',
                    'display_order'=>'2',
                    'created_at'   => DB::raw('now()'),
                    'updated_at'   => DB::raw('now()'),
                ],
            ]
            );
    }
}
