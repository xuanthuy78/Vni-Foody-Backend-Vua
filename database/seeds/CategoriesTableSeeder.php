<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
    $fake  = Faker\Factory::create();
    $limit = 30;
  
    for ($i = 0; $i < $limit; $i++){
        DB::table('categories')->insert([
            'name' => $fake->name,
            'parent_id'=>$fake->numerify,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
            
        ]);
    }
    // {
    //     DB::table('categories')->insert(
    //         [
    //             [
    //                 'name' =>'Thực đơn chính',
    //                 'parent_id'  => '0',
    //                 'created_at'   => DB::raw('now()'),
    //                 'updated_at'   => DB::raw('now()'),
    //             ],
    //             [
    //                 'name' =>'Thực đơn đặc biệt',
    //                 'parent_id'  => '1',
    //                 'created_at'   => DB::raw('now()'),
    //                 'updated_at'   => DB::raw('now()'),  
    //             ],
    //             [
    //                 'name' =>'Món khai vị',
    //                 'parent_id'  => '2',
    //                 'created_at'   => DB::raw('now()'),
    //                 'updated_at'   => DB::raw('now()'),  
    //             ],
    //             [
    //                 'name' =>'Pizza',
    //                 'parent_id'  => '3',
    //                 'created_at'   => DB::raw('now()'),
    //                 'updated_at'   => DB::raw('now()'),  
    //             ],

    //         ]
    //             );
    }
}
