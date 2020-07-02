<?php

use Illuminate\Database\Seeder;

class SlidesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('slides')->insert(
           [
            [
               'name'=>'Đồ ăn ngon',
               'image'=>'1.jpg',
               'display_order'=>'1',
               'created_at'=> DB::raw('now()'),
               'updated_at'=> DB::raw('now()'),
            ],
            [
             'name'=>'Đồ hấp dẫn',
             'image'=>'2.jpg',
             'display_order'=>'3',
             'created_at'=> DB::raw('now()'),
             'updated_at'=> DB::raw('now()'),
            ],
           ]
       );
    }
}
