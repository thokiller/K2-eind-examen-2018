<?php

use Illuminate\Database\Seeder;
use App\Objects;

class ObjectsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Objects::create( [
            'obj_id'=>1,
            'license_plate'=>'WD-55-TG',
            'chassis_number'=>'7DR239047112292',
            'obj_type'=>'caravan',
            'brand'=>'Hobby',
            'type'=>'495 UL',
            'year'=>2015,
            'mass_inventory'=>1350,
            'mass_max'=>1500,
            'length_till'=>713,
            'length_construction'=>595,
            'height'=>262,
            'license_needed'=>'BE',
            'price_day'=>50.00,
            'price_week'=>300.00,
            'created_at'=>NULL,
            'updated_at'=>NULL,
            'image_link'=>'https://www.hobby-caravan.de/fileadmin/_processed_/csm_series-2018-ww-deluxe_edea1868a0.png',
            'day_view_image_link'=>'https://www.hobby-caravan.de/fileadmin/user_upload/grundrisse/grundrisse-2018/WW/2018_gr_ww_deluxe_edition_460lu.png',
            'night_view_image_link'=>'https://www.hobby-caravan.de/fileadmin/user_upload/grundrisse/grundrisse-2018/WW/2018_gr_ww_deluxe_460lu_sleep.png'
        ] );



        Objects::create( [
            'obj_id'=>2,
            'license_plate'=>'WL-23-SD',
            'chassis_number'=>'7DR239047233162',
            'obj_type'=>'caravan',
            'brand'=>'Hobby',
            'type'=>'460 LU',
            'year'=>2013,
            'mass_inventory'=>1100,
            'mass_max'=>1350,
            'length_till'=>661,
            'length_construction'=>550,
            'height'=>260,
            'license_needed'=>'BE',
            'price_day'=>40.00,
            'price_week'=>250.00,
            'created_at'=>NULL,
            'updated_at'=>NULL,
            'image_link'=>'https://www.hobby-caravan.de/fileadmin/_processed_/csm_series-2018-ww-deluxe_edea1868a0.png',
            'day_view_image_link'=>'https://www.hobby-caravan.de/fileadmin/user_upload/grundrisse/grundrisse-2018/WW/2018_gr_ww_deluxe_495ul.png',
            'night_view_image_link'=>'https://www.hobby-caravan.de/fileadmin/user_upload/grundrisse/grundrisse-2018/WW/2018_gr_ww_deluxe_495ul_sleep.png'
        ] );



        Objects::create( [
            'obj_id'=>3,
            'license_plate'=>'WG-13-BM',
            'chassis_number'=>'7DR239047119811',
            'obj_type'=>'caravan',
            'brand'=>'Hobby',
            'type'=>'495 UL',
            'year'=>2018,
            'mass_inventory'=>1350,
            'mass_max'=>1550,
            'length_till'=>713,
            'length_construction'=>595,
            'height'=>260,
            'license_needed'=>'BE',
            'price_day'=>60.00,
            'price_week'=>400.00,
            'created_at'=>NULL,
            'updated_at'=>NULL,
            'image_link'=>'https://www.hobby-caravan.de/fileadmin/_processed_/csm_series-2018-ww-deluxe_edea1868a0.png',
            'day_view_image_link'=>'https://www.hobby-caravan.de/fileadmin/user_upload/grundrisse/grundrisse-2018/WW/2018_gr_ww_deluxe_495ul.png',
            'night_view_image_link'=>'https://www.hobby-caravan.de/fileadmin/user_upload/grundrisse/grundrisse-2018/WW/2018_gr_ww_deluxe_495ul_sleep.png'
        ] );



        Objects::create( [
            'obj_id'=>4,
            'license_plate'=>'WG-38-TY',
            'chassis_number'=>'7DR239047511206',
            'obj_type'=>'caravan',
            'brand'=>'Hobby',
            'type'=>'460 LU',
            'year'=>2013,
            'mass_inventory'=>1250,
            'mass_max'=>1350,
            'length_till'=>661,
            'length_construction'=>550,
            'height'=>260,
            'license_needed'=>'BE',
            'price_day'=>40.00,
            'price_week'=>400.00,
            'created_at'=>NULL,
            'updated_at'=>NULL,
            'image_link'=>'https://www.hobby-caravan.de/fileadmin/_processed_/csm_series-2018-ww-deluxe_edea1868a0.png',
            'day_view_image_link'=>'https://www.hobby-caravan.de/fileadmin/user_upload/grundrisse/grundrisse-2018/WW/2018_gr_ww_deluxe_edition_460lu.png',
            'night_view_image_link'=>'https://www.hobby-caravan.de/fileadmin/user_upload/grundrisse/grundrisse-2018/WW/2018_gr_ww_deluxe_460lu_sleep.png'
        ] );



        Objects::create( [
            'obj_id'=>5,
            'license_plate'=>'WX-75-22',
            'chassis_number'=>'7DR239047114003',
            'obj_type'=>'caravan',
            'brand'=>'Hobby',
            'type'=>'460 LU',
            'year'=>2013,
            'mass_inventory'=>1250,
            'mass_max'=>1350,
            'length_till'=>661,
            'length_construction'=>550,
            'height'=>260,
            'license_needed'=>'BE',
            'price_day'=>40.00,
            'price_week'=>400.00,
            'created_at'=>NULL,
            'updated_at'=>NULL,
            'image_link'=>'https://www.hobby-caravan.de/fileadmin/_processed_/csm_series-2018-ww-deluxe_edea1868a0.png',
            'day_view_image_link'=>'https://www.hobby-caravan.de/fileadmin/user_upload/grundrisse/grundrisse-2018/WW/2018_gr_ww_deluxe_edition_460lu.png',
            'night_view_image_link'=>'https://www.hobby-caravan.de/fileadmin/user_upload/grundrisse/grundrisse-2018/WW/2018_gr_ww_deluxe_460lu_sleep.png'
        ] );



        Objects::create( [
            'obj_id'=>6,
            'license_plate'=>'BC-113-P',
            'chassis_number'=>'7BMDF239047114003',
            'obj_type'=>'camper',
            'brand'=>'Optima',
            'type'=>'V60GF',
            'year'=>2015,
            'mass_inventory'=>2900,
            'mass_max'=>3500,
            'length_till'=>600,
            'length_construction'=>430,
            'height'=>270,
            'license_needed'=>'B',
            'price_day'=>100.00,
            'price_week'=>400.00,
            'created_at'=>NULL,
            'updated_at'=>NULL,
            'image_link'=>'https://www.hobby-caravan.de/fileadmin/_processed_/csm_series-2018-rm-optima_de_luxe_1348b40605.png',
            'day_view_image_link'=>'https://www.hobby-caravan.de/fileadmin/user_upload/grundrisse/grundrisse-2018/RM/2018_gr_rm_optima_v60gf.png',
            'night_view_image_link'=>'https://www.hobby-caravan.de/fileadmin/user_upload/grundrisse/grundrisse-2018/RM/2018_gr_rm_optima_v60gf_sleep.png'
        ] );



        Objects::create( [
            'obj_id'=>7,
            'license_plate'=>'BD-287-T',
            'chassis_number'=>'7BMDF239042148800',
            'obj_type'=>'camper',
            'brand'=>'Optima',
            'type'=>'V60GF',
            'year'=>2017,
            'mass_inventory'=>2900,
            'mass_max'=>3500,
            'length_till'=>600,
            'length_construction'=>430,
            'height'=>270,
            'license_needed'=>'B',
            'price_day'=>115.00,
            'price_week'=>400.00,
            'created_at'=>NULL,
            'updated_at'=>NULL,
            'image_link'=>'https://www.hobby-caravan.de/fileadmin/_processed_/csm_series-2018-rm-optima_de_luxe_1348b40605.png',
            'day_view_image_link'=>'https://www.hobby-caravan.de/fileadmin/user_upload/grundrisse/grundrisse-2018/RM/2018_gr_rm_optima_v60gf.png',
            'night_view_image_link'=>'https://www.hobby-caravan.de/fileadmin/user_upload/grundrisse/grundrisse-2018/RM/2018_gr_rm_optima_v60gf_sleep.png'
        ] );



        Objects::create( [
            'obj_id'=>8,
            'license_plate'=>'DV-441-K',
            'chassis_number'=>'7BMDG239047112297',
            'obj_type'=>'camper',
            'brand'=>'Optima',
            'type'=>'T70E',
            'year'=>2015,
            'mass_inventory'=>2900,
            'mass_max'=>3500,
            'length_till'=>738,
            'length_construction'=>510,
            'height'=>270,
            'license_needed'=>'B',
            'price_day'=>115.00,
            'price_week'=>700.00,
            'created_at'=>NULL,
            'updated_at'=>NULL,
            'image_link'=>'https://www.hobby-caravan.de/fileadmin/_processed_/csm_series-2018-rm-optima_de_luxe_1348b40605.png',
            'day_view_image_link'=>'https://www.hobby-caravan.de/fileadmin/user_upload/grundrisse/grundrisse-2018/RM/2018_gr_rm_optima_t70e.png',
            'night_view_image_link'=>'https://www.hobby-caravan.de/fileadmin/user_upload/grundrisse/grundrisse-2018/RM/2018_gr_rm_optima_t70e_sleep.png'
        ] );



        Objects::create( [
            'obj_id'=>9,
            'license_plate'=>'DD-419-L',
            'chassis_number'=>'7BMDFH23904737121',
            'obj_type'=>'camper',
            'brand'=>'Optima',
            'type'=>'T70E',
            'year'=>2018,
            'mass_inventory'=>2900,
            'mass_max'=>3500,
            'length_till'=>738,
            'length_construction'=>510,
            'height'=>270,
            'license_needed'=>'B',
            'price_day'=>130.00,
            'price_week'=>400.00,
            'created_at'=>NULL,
            'updated_at'=>NULL,
            'image_link'=>'https://www.hobby-caravan.de/fileadmin/_processed_/csm_series-2018-rm-optima_de_luxe_1348b40605.png',
            'day_view_image_link'=>'https://www.hobby-caravan.de/fileadmin/user_upload/grundrisse/grundrisse-2018/RM/2018_gr_rm_optima_t70e.png',
            'night_view_image_link'=>'https://www.hobby-caravan.de/fileadmin/user_upload/grundrisse/grundrisse-2018/RM/2018_gr_rm_optima_t70e_sleep.png'
        ] );



        Objects::create( [
            'obj_id'=>10,
            'license_plate'=>'DZ-712-R',
            'chassis_number'=>'7BMDK239067822023',
            'obj_type'=>'camper',
            'brand'=>'Optima',
            'type'=>'A65GM',
            'year'=>2016,
            'mass_inventory'=>3000,
            'mass_max'=>3650,
            'length_till'=>649,
            'length_construction'=>520,
            'height'=>277,
            'license_needed'=>'CE',
            'price_day'=>130.00,
            'price_week'=>400.00,
            'created_at'=>NULL,
            'updated_at'=>NULL,
            'image_link'=>'https://www.hobby-caravan.de/fileadmin/_processed_/csm_series-2018-rm-siesta_e2eddfe69a.png',
            'day_view_image_link'=>'https://www.hobby-caravan.de/fileadmin/user_upload/grundrisse/grundrisse-2018/RM/2018_gr_rm_siesta_a65gm.png',
            'night_view_image_link'=>'https://www.hobby-caravan.de/fileadmin/user_upload/grundrisse/grundrisse-2018/RM/2018_gr_rm_siesta_a65gm_sleep.png'
        ] );
    }
}
