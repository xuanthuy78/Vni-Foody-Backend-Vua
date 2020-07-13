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
        $fake  = Faker\Factory::create();
        $limit = 10;
        for ($i = 0; $i < $limit; $i++){
            DB::table('new_categories')->insert([
                'name' => $fake->name,
                'parent_id'=>$fake->numerify,
                'display_order'=>$fake->numerify,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
                
            ]);
        }
        // DB::table('new_categories')->insert(
        //     [
        //         [
        //             'name'=>'Tin khuyến mãi',
        //             'parent_id'=>'1',
        //             'display_order'=>'1',
        //             'created_at'   => DB::raw('now()'),
        //             'updated_at'   => DB::raw('now()'),
        //         ],
        //         [
        //             'name'=>'Tin nổi bật',
        //             'parent_id'=>'2',
        //             'display_order'=>'2',
        //             'created_at'   => DB::raw('now()'),
        //             'updated_at'   => DB::raw('now()'),
        //         ],
        //     ]
        //     );
    }
}
