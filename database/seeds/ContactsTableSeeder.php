<?php

use Illuminate\Database\Seeder;

class ContactsTableSeeder extends Seeder
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
            DB::table('contacts')->insert([
                'name' => $fake->name,
                'address'=>$fake->address,
                'email' => $fake->unique->email,
                'title' => $fake->name,
                'content'=>$fake->sentence,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
                
            ]);
        }
    //    DB::table('contacts')->insert(
    //       [
    //         [
    //             'name'=>'Nguyễn Ngọc Yến Nhi',
    //             'address'=>'02 Thanh Sơn Hải Châu Đà Nẵng',
    //             'email'=>'yennhi97@gmail.com',
    //             'title'=>'Nội dung 111',
    //             'content'=>'Yêu cầu xử lí đơn hàng',
    //             'created_at'   => DB::raw('now()'),
    //             'updated_at'   => DB::raw('now()'),
    //         ],
    //         [
    //          'name'=>'Nguyễn Ngọc Yến Chi',
    //          'address'=>'02 Thanh Sơn Hải Châu Đà Nẵng',
    //          'email'=>'yenchi97@gmail.com',
    //          'title'=>'Nội dung 2222',
    //          'content'=>'Yêu cầu xử lí nhân viên vi phạm',
    //          'created_at'   => DB::raw('now()'),
    //          'updated_at'   => DB::raw('now()'),
    //      ]
    //       ]
    //        );
    }
}
