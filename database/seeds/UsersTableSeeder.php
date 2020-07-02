<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(
            [
                [
                    'name'=>'Nguyễn Ngọc Kỳ Duyên',
                    'email'=>'kyduyen@gmail.com',
                    'phone'=>'089972245',
                    'password'=>'abc@12345',
                    'address'=>'64 Trần Cao Vân',
                    'avatar'=>'4.jpg',
                    'province'=>'Thành phố Đà Nẵng',
                    'district'=>'Phường Thạch Thang',
                    'is_role'=>'1',
                    'created_at'=> DB::raw('now()'),
                    'updated_at'=> DB::raw('now()'),
                ],
                [
                    'name'=>'Hồ Thị Thùy Linh',
                    'email'=>'thuylinh123@gmail.com',
                    'phone'=>'088767982',
                    'password'=>'hothithuylinh',
                    'address'=>'34 Nguyễn Hoàng',
                    'avatar'=>'3.jpg',
                    'province'=>'Tỉnh Quảng Trị',
                    'district'=>'Huyện Đakrông',
                    'is_role'=>'1',
                    'created_at'=> DB::raw('now()'),
                    'updated_at'=> DB::raw('now()'),
                ],
            ]
        ); 
    }
}
