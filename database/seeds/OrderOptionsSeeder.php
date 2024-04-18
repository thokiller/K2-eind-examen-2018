<?php

use App\OrderOptions;
use Illuminate\Database\Seeder;

class OrderOptionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        OrderOptions::create( [
            'ordernumber'=>1,
            'option_id'=>2,
            'option_date_in'=>'2018-02-04 15:16:00',
            'option_date_out'=>'2018-06-29 17:00:00',
            'created_at'=>NULL,
            'updated_at'=>NULL
        ] );



        OrderOptions::create( [
            'ordernumber'=>1,
            'option_id'=>3,
            'option_date_in'=>'2018-02-04 15:16:00',
            'option_date_out'=>'2018-06-29 17:00:00',
            'created_at'=>NULL,
            'updated_at'=>NULL
        ] );



        OrderOptions::create( [
            'ordernumber'=>1,
            'option_id'=>8,
            'option_date_in'=>'2018-02-04 15:16:00',
            'option_date_out'=>'2018-06-29 17:00:00',
            'created_at'=>NULL,
            'updated_at'=>NULL
        ] );



        OrderOptions::create( [
            'ordernumber'=>2,
            'option_id'=>3,
            'option_date_in'=>'2018-02-06 12:24:00',
            'option_date_out'=>'2018-06-04 14:00:00',
            'created_at'=>NULL,
            'updated_at'=>NULL
        ] );



        OrderOptions::create( [
            'ordernumber'=>2,
            'option_id'=>5,
            'option_date_in'=>'2018-02-06 12:24:00',
            'option_date_out'=>'2018-06-04 14:00:00',
            'created_at'=>NULL,
            'updated_at'=>NULL
        ] );



        OrderOptions::create( [
            'ordernumber'=>8,
            'option_id'=>1,
            'option_date_in'=>'2018-02-24 06:40:00',
            'option_date_out'=>'2018-03-14 14:00:00',
            'created_at'=>NULL,
            'updated_at'=>NULL
        ] );



        OrderOptions::create( [
            'ordernumber'=>8,
            'option_id'=>3,
            'option_date_in'=>'2018-02-24 06:40:00',
            'option_date_out'=>'2018-03-14 14:00:00',
            'created_at'=>NULL,
            'updated_at'=>NULL
        ] );



        OrderOptions::create( [
            'ordernumber'=>8,
            'option_id'=>7,
            'option_date_in'=>'2018-02-24 06:40:00',
            'option_date_out'=>'2018-03-14 14:00:00',
            'created_at'=>NULL,
            'updated_at'=>NULL
        ] );



        OrderOptions::create( [
            'ordernumber'=>10,
            'option_id'=>1,
            'option_date_in'=>'2018-02-09 08:00:00',
            'option_date_out'=>'2018-11-16 13:00:00',
            'created_at'=>NULL,
            'updated_at'=>NULL
        ] );



        OrderOptions::create( [
            'ordernumber'=>10,
            'option_id'=>9,
            'option_date_in'=>'2018-02-09 08:00:00',
            'option_date_out'=>'2018-11-16 13:00:00',
            'created_at'=>NULL,
            'updated_at'=>NULL
        ] );
    }
}
