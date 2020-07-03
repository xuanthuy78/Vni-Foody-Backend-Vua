<?php

use Illuminate\Database\Seeder;

class OrderDetailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $fake  = Faker\Factory::create();
      $limit = 10;
    
      for ($i = 0; $i < $limit; $i++){
          DB::table('order_details')->insert([
              'order_id'=>$fake->numerify,
              'product_id'=>$fake->numerify,
              'price'=>$fake->numerify,
              'quanlity'=>$fake->numerify,
              'created_at' => date("Y-m-d H:i:s"),
              'updated_at' => date("Y-m-d H:i:s"),
              
          ]);
      }
        // DB::table('order_details')->insert(
        //    [
        //     [
        //         'order_id'=>'1',
        //         'product_id'=>'1',
        //         'price'=>'30.000',
        //         'quanlity'=>'2',
        //         'created_at'   => DB::raw('now()'),
        //         'updated_at'   => DB::raw('now()'),
        //      ],
        //      [
        //          'order_id'=>'2',
        //          'product_id'=>'2',
        //          'price'=>'100.000',
        //          'quanlity'=>'3',
        //          'created_at'   => DB::raw('now()'),
        //          'updated_at'   => DB::raw('now()'),
        //      ],
        //    ]
        //     );
    }
}
