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
        // $fake  = Faker\Factory::create();
        // $limit = 20;
      
        // for ($i = 0; $i < $limit; $i++){
        //     DB::table('users')->insert([
        //         'name' => $fake->name,
        //         'email' => $fake->unique->email,
        //         'phone'=>$fake->phoneNumber,
        //         'password'=>$fake->password,
        //         'address'=>$fake->address,
        //         'avatar'=>$fake->imageUrl($width = 200, $height = 200),
        //         'province'=>$fake->city,
        //         'district'=>$fake->address,
        //         'created_at' => date("Y-m-d H:i:s"),
        //         'updated_at' => date("Y-m-d H:i:s"),
                
        //     ]);
        // }
        DB::table('users')->insert(
            [
                [
                    'name'=>'Nguyễn Ngọc Kỳ Duyên',
                    'email'=>'kyduyen@gmail.com',
                    'phone'=>'089972245',
                    'password'=>bcrypt('abc@12345'),
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
                    'password'=>bcrypt('hothithuylinh'),
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
