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
        DB::table('order_details')->insert(
           [
            [
                'order_id'=>'1',
                'product_id'=>'1',
                'price'=>'30.000',
                'quanlity'=>'2',
                'created_at'   => DB::raw('now()'),
                'updated_at'   => DB::raw('now()'),
             ],
             [
                 'order_id'=>'2',
                 'product_id'=>'2',
                 'price'=>'100.000',
                 'quanlity'=>'3',
                 'created_at'   => DB::raw('now()'),
                 'updated_at'   => DB::raw('now()'),
             ],
           ]
            );
    }
}
