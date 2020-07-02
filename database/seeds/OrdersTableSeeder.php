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
        DB::table('orders')->insert(
            [
                [
                    'name'=>'Mai Anh Dũng',
                    'user_id'=>'1',
                    'status'=>'Chưa thanh toán',
                    'delivery_address'=>'36 Quang Trung Hải Châu Đà Nẵng',
                    'total_price'=>'560.000',
                    'note'=>'Ăn nóng sẽ ngon hơn',
                    'address'=>'74 Trần Cao Vân Thạch Thang Đà Nẵng',
                    'phone'=>'0838623845',
                    'email'=>'anhdung87@gmail.com',
                    'created_at'=> DB::raw('now()'),
                    'updated_at'=> DB::raw('now()'),
                 ],
                 [
                    'name'=>'Đỗ Thị Mỹ Duyên',
                    'user_id'=>'5',
                    'status'=>'Đã thanh toán qua thẻ',
                    'delivery_address'=>'36 Quang Trung Hải Châu Đà Nẵng',
                    'total_price'=>'200.000',
                    'note'=>'Chấm bánh mì sẽ cảm nhận vị ngon của nước chấm',
                    'address'=>'365 Trưng Nữ Vương Hải Châu Đà Nẵng',
                    'phone'=>'037767837',
                    'email'=>'myduyen123@gmail.com',
                    'created_at'=> DB::raw('now()'),
                    'updated_at'=> DB::raw('now()'),
                 ],
            ]
        );
    }
}
