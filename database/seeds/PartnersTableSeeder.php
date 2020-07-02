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
        DB::table('partners')->insert(
            [
                [
                    'name'=>'KFC',
                    'image'=>'KFC.png',
                    'created_at'=> DB::raw('now()'),
                    'updated_at'=> DB::raw('now()'),
                ],
                [
                    'name'=>'Highlands',
                    'image'=>'Highlands.png',
                    'created_at'=> DB::raw('now()'),
                    'updated_at'=> DB::raw('now()'),
                ],
            ]
        );
    }
}
