<?php

use Illuminate\Database\Seeder;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comments')->insert(
            [
                [
                    'content'=>'Very good',
                    'user_id'=>'1',
                    'product_id'=>'1',
                    'created_at'   => DB::raw('now()'),
                    'updated_at'   => DB::raw('now()'),
                ],
                [
                    'content'=>'Ngon',
                    'user_id'=>'2',
                    'product_id'=>'2',
                    'created_at'   => DB::raw('now()'),
                    'updated_at'   => DB::raw('now()'),
                ],
                [
                    'content'=>'Nước chấm thơm và ngon',
                    'user_id'=>'3',
                    'product_id'=>'3',
                    'created_at'   => DB::raw('now()'),
                    'updated_at'   => DB::raw('now()'),
                ],
            ]
            );
    }
}
