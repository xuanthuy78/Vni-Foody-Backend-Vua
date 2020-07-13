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
                    'account'=>'kyduyen',
                    'email'=>'kyduyen@gmail.com',
                    'phone'=>'089972245',
                    'password'=>bcrypt('abc@12345'),
                    'c_password'=>bcrypt('abc@12345'),
                    'name'=>'Nguyễn Ngọc Kỳ Duyên',
                    'sex'=>'female',
                    'brithday'=>'1998-07-30',
                    'address'=>'64 Trần Cao Vân',
                    'province'=>'Thành phố Đà Nẵng',
                    'district'=>'Phường Thạch Thang',
                    'is_role'=>'1',
                    'created_at'=> DB::raw('now()'),
                    'updated_at'=> DB::raw('now()'),
                ],
                [
                    'account'=>'thuylinh',
                    'email'=>'thuylinh123@gmail.com',
                    'phone'=>'088767982',
                    'password'=>bcrypt('hothithuylinh'),
                    'c_password'=>bcrypt('hothithuylinh'),
                    'name'=>'Hồ Thị Thùy Linh',
                    'sex'=>'female',
                    'brithday'=>'1994-02-06',
                    'address'=>'34 Nguyễn Hoàng',
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
