<?php

use Illuminate\Database\Seeder;

class OrdersTableSeeder extends Seeder
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
            DB::table('orders')->insert([
                'name' => $fake->name,
                'user_id'=>$fake->numerify,
                'status'=>$fake->sentence,
                'delivery_address'=>$fake->address,
                'total_price'=>$fake->numerify,
                'note'=>$fake->sentence,
                'address'=>$fake->address,
                'email' => $fake->unique->email,
                'phone'=>$fake->phoneNumber,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
                
            ]);
        }
        // DB::table('orders')->insert(
        //     [
        //         [
        //             'name'=>'Mai Anh Dũng',
        //             'user_id'=>'1',
        //             'status'=>'Chưa thanh toán',
        //             'delivery_address'=>'36 Quang Trung Hải Châu Đà Nẵng',
        //             'total_price'=>'560.000',
        //             'note'=>'Ăn nóng sẽ ngon hơn',
        //             'address'=>'74 Trần Cao Vân Thạch Thang Đà Nẵng',
        //             'phone'=>'0838623845',
        //             'email'=>'anhdung87@gmail.com',
        //             'created_at'=> DB::raw('now()'),
        //             'updated_at'=> DB::raw('now()'),
        //          ],
        //         
        //          
        //     ]
        // );
    }
}
