<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $fake  = Faker\Factory::create();
      $limit = 100;
    
      for ($i = 0; $i < $limit; $i++){
          DB::table('products')->insert([
              'name' => $fake->name,
              'code'=>$fake->numerify,
              'price'=>$fake->numerify,
              'quanlity'=>$fake->numerify,
              'description'=>$fake->sentence,
              'detail'=>$fake->sentence,
              'image'=>$fake->imageUrl($width = 200, $height = 200),
              'categories_id'=>$fake->numerify,
              'partner_id'=>$fake->numerify,
              'comment_id'=>$fake->numerify,
              'created_at' => date("Y-m-d H:i:s"),
              'updated_at' => date("Y-m-d H:i:s"),
              
          ]);
      }
      //  DB::table('products')->insert(
      //     [
      //       [
      //           'name'=>'Cơm cuộn',
      //           'code'=>'037',
      //           'price'=>'40.000',
      //           'quanlity'=>'10',
      //           'description'=>'Cơm ngon đặc biệt có mùi thơm từ gạo nếp',
      //           'detail'=>'Nguyên liệu bao gôm cá, rong biển',
      //           'image'=>'cơm.jpg',
      //           'top_hot'=>'1',
      //           'categories_id'=>'1',
      //           'partner_id'=>'1',
      //           'comment_id'=>'1',
      //           'created_at'=> DB::raw('now()'),
      //           'updated_at'=> DB::raw('now()'),
 
      //       ],
      //      
      //     ]
      //  );
    }
}
