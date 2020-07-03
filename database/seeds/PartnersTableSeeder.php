<?php

use Illuminate\Database\Seeder;

class PartnersTableSeeder extends Seeder
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
          DB::table('partners')->insert([
              'name' => $fake->name,
              'image'=>$fake->imageUrl($width = 200, $height = 200),
              'created_at' => date("Y-m-d H:i:s"),
              'updated_at' => date("Y-m-d H:i:s"),
              
          ]);
      }
        // DB::table('partners')->insert(
        //     [
        //         [
        //             'name'=>'KFC',
        //             'image'=>'KFC.png',
        //             'created_at'=> DB::raw('now()'),
        //             'updated_at'=> DB::raw('now()'),
        //         ],
        //         [
        //             'name'=>'Highlands',
        //             'image'=>'Highlands.png',
        //             'created_at'=> DB::raw('now()'),
        //             'updated_at'=> DB::raw('now()'),
        //         ],
        //     ]
        // );
    }
}
