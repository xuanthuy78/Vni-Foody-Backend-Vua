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
       DB::table('products')->insert(
          [
            [
                'name'=>'Cơm cuộn',
                'code'=>'037',
                'price'=>'40.000',
                'quanlity'=>'10',
                'description'=>'Cơm ngon đặc biệt có mùi thơm từ gạo nếp',
                'detail'=>'Nguyên liệu bao gôm cá, rong biển',
                'image'=>'cơm.jpg',
                'top_hot'=>'1',
                'categories_id'=>'1',
                'partner_id'=>'1',
                'comment_id'=>'1',
                'created_at'=> DB::raw('now()'),
                'updated_at'=> DB::raw('now()'),
 
            ],
            [
             'name'=>'Xà lách trộn kiểu Nga',
             'code'=>'345',
             'price'=>'50.000',
             'quanlity'=>'12',
             'description'=>'Món salad Nga luôn tươi ngon và hấp dẫn những ai thưởng thức.',
             'detail'=>'Luộc chín hạt đậu Hà Lan, khoai tây và cà rốt rồi vớt ra, để ráo nước, cho chung vào một bát to.',
             'image'=>'saland.jpg',
             'top_hot'=>'0',
             'categories_id'=>'3',
             'partner_id'=>'2',
             'comment_id'=>'5',
             'created_at'=> DB::raw('now()'),
             'updated_at'=> DB::raw('now()'),
 
            ],
          ]
       );
    }
}
