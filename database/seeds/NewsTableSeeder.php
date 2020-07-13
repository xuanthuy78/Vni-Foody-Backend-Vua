<?php

use Illuminate\Database\Seeder;

class NewsTableSeeder extends Seeder
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
          DB::table('news')->insert([
              'name' => $fake->name,
              'title'=>$fake->name,
              'content'=>$fake->sentence,
              'image'=>$fake->imageUrl($width = 200, $height = 200),
              'newcategories_id'=>$fake->numerify,
              'created_at' => date("Y-m-d H:i:s"),
              'updated_at' => date("Y-m-d H:i:s"),
              
          ]);
      }
        // DB::table('news')->insert(
        //     [
        //         [
        //             'name'=>'Khuyến mãi thứ 2,4,6',
        //             'title'=>'Khuyến mãi pizza thứ 2,3,4',
        //             'content'=>'Áp dụng cho các hình thức: giao bánh và mang về',
        //             'image'=>'pizza.jpg',
        //             'newcategories_id'=>'1',
        //             'created_at'   => DB::raw('now()'),
        //             'updated_at'   => DB::raw('now()'),
        //         ],
        //         [
        //             'name'=>'Tặng 1 bánh pizza miễn phí cho ngày sinh nhật của bạn',
        //             'title'=>'Tặng pizza miễn phí',
        //             'content'=>'Tặng 1 pizza cỡ M (áp dụng cho tất cả các loại pizza trừ số 3, 11 và 12)',
        //             'image'=>'pizza1.jpg',
        //             'newcategories_id'=>'2',
        //             'created_at'   => DB::raw('now()'),
        //             'updated_at'   => DB::raw('now()'),
        //         ],
        //     ]
        //     );
    }
}
