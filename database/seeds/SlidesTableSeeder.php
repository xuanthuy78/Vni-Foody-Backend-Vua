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
        $fake  = Faker\Factory::create();
        $limit = 10;
      
        for ($i = 0; $i < $limit; $i++){
            DB::table('slides')->insert([
                'name' => $fake->name,
                'image'=>$fake->imageUrl($width = 200, $height = 200),
                'display_order'=>$fake->numerify,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
                
            ]);
        }
    //    DB::table('slides')->insert(
    //        [
    //         [
    //            'name'=>'Đồ ăn ngon',
    //            'image'=>'1.jpg',
    //            'display_order'=>'1',
    //            'created_at'=> DB::raw('now()'),
    //            'updated_at'=> DB::raw('now()'),
    //         ],
    //         [
    //          'name'=>'Đồ hấp dẫn',
    //          'image'=>'2.jpg',
    //          'display_order'=>'3',
    //          'created_at'=> DB::raw('now()'),
    //          'updated_at'=> DB::raw('now()'),
    //         ],
    //        ]
    //    );
    }
}
