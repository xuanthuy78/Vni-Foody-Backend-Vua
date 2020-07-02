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
       DB::table('contacts')->insert(
          [
            [
                'name'=>'Nguyễn Ngọc Yến Nhi',
                'address'=>'02 Thanh Sơn Hải Châu Đà Nẵng',
                'email'=>'yennhi97@gmail.com',
                'title'=>'Nội dung 111',
                'content'=>'Yêu cầu xử lí đơn hàng',
                'created_at'   => DB::raw('now()'),
                'updated_at'   => DB::raw('now()'),
            ],
            [
             'name'=>'Nguyễn Ngọc Yến Chi',
             'address'=>'02 Thanh Sơn Hải Châu Đà Nẵng',
             'email'=>'yenchi97@gmail.com',
             'title'=>'Nội dung 2222',
             'content'=>'Yêu cầu xử lí nhân viên vi phạm',
             'created_at'   => DB::raw('now()'),
             'updated_at'   => DB::raw('now()'),
         ]
          ]
           );
    }
}
