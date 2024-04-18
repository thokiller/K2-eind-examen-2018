<?php

use App\Orders;
use Illuminate\Database\Seeder;

class OrdersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Orders::create( [
            'ordernumber'=>1,
            'date_ordered'=>'2018-01-08 09:24:59',
            'customer_id'=>1,
            'obj_id'=>5,
            'obj_date_in'=>'2018-02-04 09:26:00',
            'obj_date_out'=>'2018-06-29 17:00:00',
            'created_at'=>NULL,
            'updated_at'=>NULL,
            'invoice' => ''
        ] );



        Orders::create( [
            'ordernumber'=>2,
            'date_ordered'=>'2018-01-10 05:44:45',
            'customer_id'=>2,
            'obj_id'=>1,
            'obj_date_in'=>'2018-03-06 12:24:00',
            'obj_date_out'=>'2018-06-04 14:00:00',
            'created_at'=>NULL,
            'updated_at'=>NULL,
            'invoice' => ''
        ] );



        Orders::create( [
            'ordernumber'=>3,
            'date_ordered'=>'2018-01-11 20:23:12',
            'customer_id'=>3,
            'obj_id'=>2,
            'obj_date_in'=>'2018-01-07 16:45:00',
            'obj_date_out'=>'2018-04-15 19:00:00',
            'created_at'=>NULL,
            'updated_at'=>NULL,
            'invoice' => ''
        ] );



        Orders::create( [
            'ordernumber'=>4,
            'date_ordered'=>'2018-01-12 16:16:23',
            'customer_id'=>5,
            'obj_id'=>7,
            'obj_date_in'=>'2018-02-23 23:59:00',
            'obj_date_out'=>'2018-03-29 12:00:00',
            'created_at'=>NULL,
            'updated_at'=>NULL,
            'invoice' => ''
        ] );



        Orders::create( [
            'ordernumber'=>5,
            'date_ordered'=>'2018-01-12 15:34:40',
            'customer_id'=>3,
            'obj_id'=>4,
            'obj_date_in'=>'2018-03-08 12:15:00',
            'obj_date_out'=>'2018-07-18 14:00:00',
            'created_at'=>NULL,
            'updated_at'=>NULL,
            'invoice' => ''
        ] );



        Orders::create( [
            'ordernumber'=>6,
            'date_ordered'=>'2018-01-13 20:55:52',
            'customer_id'=>10,
            'obj_id'=>9,
            'obj_date_in'=>'2018-02-14 16:30:00',
            'obj_date_out'=>'2018-09-14 16:00:00',
            'created_at'=>NULL,
            'updated_at'=>NULL,
            'invoice' => ''
        ] );



        Orders::create( [
            'ordernumber'=>7,
            'date_ordered'=>'2018-01-14 23:08:30',
            'customer_id'=>8,
            'obj_id'=>6,
            'obj_date_in'=>'2018-02-16 04:50:00',
            'obj_date_out'=>'2018-12-25 20:00:00',
            'created_at'=>NULL,
            'updated_at'=>NULL,
            'invoice' => ''
        ] );



        Orders::create( [
            'ordernumber'=>8,
            'date_ordered'=>'2018-01-15 18:14:59',
            'customer_id'=>5,
            'obj_id'=>10,
            'obj_date_in'=>'2018-02-24 06:40:00',
            'obj_date_out'=>'2018-03-14 14:00:00',
            'created_at'=>NULL,
            'updated_at'=>NULL,
            'invoice' => ''
        ] );



        Orders::create( [
            'ordernumber'=>9,
            'date_ordered'=>'2018-01-15 16:40:50',
            'customer_id'=>6,
            'obj_id'=>3,
            'obj_date_in'=>'2018-02-05 07:30:00',
            'obj_date_out'=>'2018-04-25 21:00:00',
            'created_at'=>NULL,
            'updated_at'=>NULL,
            'invoice' => ''
        ] );



        Orders::create( [
            'ordernumber'=>10,
            'date_ordered'=>'2018-01-16 13:59:00',
            'customer_id'=>7,
            'obj_id'=>8,
            'obj_date_in'=>'2018-02-09 08:00:00',
            'obj_date_out'=>'2018-11-16 13:00:00',
            'created_at'=>NULL,
            'updated_at'=>NULL,
            'invoice' => ''
        ] );



        Orders::create( [
            'ordernumber'=>11,
            'date_ordered'=>'2018-01-23 14:21:12',
            'customer_id'=>1,
            'obj_id'=>1,
            'obj_date_in'=>'2018-01-23 14:21:12',
            'obj_date_out'=>'2018-01-25 14:21:12',
            'created_at'=>'2018-01-23 14:21:12',
            'updated_at'=>'2018-01-23 14:21:12',
            'invoice' => ''
        ] );
    }
}
