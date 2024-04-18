<?php

use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create( [
            'customer_id'=>1,
            'license_number'=>'50000001',
            'customer_initial'=>'GJ',
            'customer_insertion'=>'',
            'customer_lastname'=>'Dijkuis',
            'customer_address'=>'somewhere 7',
            'customer_postal_code'=>'8080JA',
            'customer_town'=>'Someplace',
            'customer_phone'=>'+31-0000001',
            'customer_mobile'=>'06-00000001',
            'customer_email'=>'someone@something.com',
            'customer_username'=>'customer1',
            'customer_password'=>'$2a$12$brIhkRWG8BgWRDwoPhRXrOZv5DTKsjChowI/br2MrSmypvdUaKsNW',
            'customer_status'=>'1',
            'email_confirmed'=>'confirmed',
            'is_admin'=>1,
            'remember_token'=>'bhTmGoWAGCa6drrCVzOqejt5nWSq9nrfx5Gp5i67HE9fsmamMKL2wXnyfa2S',
            'created_at'=>'2018-01-01 00:00:00',
            'updated_at'=>'2018-01-19 10:03:46',
            'test_moment'=>'01-01-2018 9:00 - 11:00',
            'qualified'=>1
        ] );



        User::create( [
            'customer_id'=>2,
            'license_number'=>'50000002',
            'customer_initial'=>'B',
            'customer_insertion'=>'',
            'customer_lastname'=>'Mulder',
            'customer_address'=>'somewhere 8',
            'customer_postal_code'=>'8080JA',
            'customer_town'=>'Someplace',
            'customer_phone'=>'+31-0000002',
            'customer_mobile'=>'06-00000002',
            'customer_email'=>'someone2@something.com',
            'customer_username'=>'customer2',
            'customer_password'=>'$2a$12$brIhkRWG8BgWRDwoPhRXrOZv5DTKsjChowI/br2MrSmypvdUaKsNW',
            'customer_status'=>'1',
            'email_confirmed'=>'',
            'is_admin'=>0,
            'remember_token'=>'sZmktp0zn0nmsSWBVVFmCQ5eMRLOQkDFmGMarguY0hNE0rvxPJ8RWCjot5CQ',
            'created_at'=>'2018-01-01 00:00:00',
            'updated_at'=>'2018-01-01 00:00:00',
            'test_moment'=>NULL,
            'qualified'=>0
        ] );



        User::create( [
            'customer_id'=>3,
            'license_number'=>'50000003',
            'customer_initial'=>'JA',
            'customer_insertion'=>'van der',
            'customer_lastname'=>'Golen',
            'customer_address'=>'somewhere 7',
            'customer_postal_code'=>'8080JA',
            'customer_town'=>'Someplace',
            'customer_phone'=>'+31-0000003',
            'customer_mobile'=>'06-00000003',
            'customer_email'=>'someone3@something.com',
            'customer_username'=>'customer3',
            'customer_password'=>'$2a$12$brIhkRWG8BgWRDwoPhRXrOZv5DTKsjChowI/br2MrSmypvdUaKsNW',
            'customer_status'=>'1',
            'email_confirmed'=>'',
            'is_admin'=>0,
            'remember_token'=>NULL,
            'created_at'=>'2018-01-01 00:00:00',
            'updated_at'=>'2018-01-01 00:00:00',
            'test_moment'=>NULL,
            'qualified'=>0
        ] );



        User::create( [
            'customer_id'=>4,
            'license_number'=>'50000004',
            'customer_initial'=>'DS',
            'customer_insertion'=>'',
            'customer_lastname'=>'Dijkuis',
            'customer_address'=>'somewhere 7',
            'customer_postal_code'=>'8080JA',
            'customer_town'=>'Someplace',
            'customer_phone'=>'+31-0000004',
            'customer_mobile'=>'06-00000004',
            'customer_email'=>'someone4@something.com',
            'customer_username'=>'customer4',
            'customer_password'=>'$2a$12$brIhkRWG8BgWRDwoPhRXrOZv5DTKsjChowI/br2MrSmypvdUaKsNW',
            'customer_status'=>'1',
            'email_confirmed'=>'',
            'is_admin'=>0,
            'remember_token'=>NULL,
            'created_at'=>'2018-01-01 00:00:00',
            'updated_at'=>'2018-01-01 00:00:00',
            'test_moment'=>NULL,
            'qualified'=>0
        ] );



        User::create( [
            'customer_id'=>5,
            'license_number'=>'50000005',
            'customer_initial'=>'C',
            'customer_insertion'=>'',
            'customer_lastname'=>'Dijkuis',
            'customer_address'=>'somewhere 7',
            'customer_postal_code'=>'8080JA',
            'customer_town'=>'Someplace',
            'customer_phone'=>'+31-0000005',
            'customer_mobile'=>'06-00000005',
            'customer_email'=>'someone5@something.com',
            'customer_username'=>'customer5',
            'customer_password'=>'$2a$12$brIhkRWG8BgWRDwoPhRXrOZv5DTKsjChowI/br2MrSmypvdUaKsNW',
            'customer_status'=>'1',
            'email_confirmed'=>'',
            'is_admin'=>0,
            'remember_token'=>NULL,
            'created_at'=>'2018-01-01 00:00:00',
            'updated_at'=>'2018-01-01 00:00:00',
            'test_moment'=>NULL,
            'qualified'=>0
        ] );



        User::create( [
            'customer_id'=>6,
            'license_number'=>'50000006',
            'customer_initial'=>'QR',
            'customer_insertion'=>'van',
            'customer_lastname'=>'Heren',
            'customer_address'=>'somewhere 7',
            'customer_postal_code'=>'8080JA',
            'customer_town'=>'Someplace',
            'customer_phone'=>'+31-0000006',
            'customer_mobile'=>'06-00000006',
            'customer_email'=>'someone6@something.com',
            'customer_username'=>'customer6',
            'customer_password'=>'$2a$12$brIhkRWG8BgWRDwoPhRXrOZv5DTKsjChowI/br2MrSmypvdUaKsNW',
            'customer_status'=>'1',
            'email_confirmed'=>'',
            'is_admin'=>0,
            'remember_token'=>NULL,
            'created_at'=>'2018-01-01 00:00:00',
            'updated_at'=>'2018-01-01 00:00:00',
            'test_moment'=>NULL,
            'qualified'=>0
        ] );



        User::create( [
            'customer_id'=>7,
            'license_number'=>'50000007',
            'customer_initial'=>'CD',
            'customer_insertion'=>'',
            'customer_lastname'=>'Dijkuis',
            'customer_address'=>'somewhere 7',
            'customer_postal_code'=>'8080JA',
            'customer_town'=>'Someplace',
            'customer_phone'=>'+31-0000007',
            'customer_mobile'=>'06-00000007',
            'customer_email'=>'someone7@something.com',
            'customer_username'=>'customer7',
            'customer_password'=>'$2a$12$brIhkRWG8BgWRDwoPhRXrOZv5DTKsjChowI/br2MrSmypvdUaKsNW',
            'customer_status'=>'1',
            'email_confirmed'=>'',
            'is_admin'=>0,
            'remember_token'=>NULL,
            'created_at'=>'2018-01-01 00:00:00',
            'updated_at'=>'2018-01-01 00:00:00',
            'test_moment'=>NULL,
            'qualified'=>0
        ] );



        User::create( [
            'customer_id'=>8,
            'license_number'=>'50000008',
            'customer_initial'=>'W',
            'customer_insertion'=>'',
            'customer_lastname'=>'Dijkuis',
            'customer_address'=>'somewhere 7',
            'customer_postal_code'=>'8080JA',
            'customer_town'=>'Someplace',
            'customer_phone'=>'+31-0000008',
            'customer_mobile'=>'06-00000008',
            'customer_email'=>'someone8@something.com',
            'customer_username'=>'customer8',
            'customer_password'=>'$2a$12$brIhkRWG8BgWRDwoPhRXrOZv5DTKsjChowI/br2MrSmypvdUaKsNW',
            'customer_status'=>'1',
            'email_confirmed'=>'',
            'is_admin'=>0,
            'remember_token'=>NULL,
            'created_at'=>'2018-01-01 00:00:00',
            'updated_at'=>'2018-01-01 00:00:00',
            'test_moment'=>NULL,
            'qualified'=>0
        ] );



        User::create( [
            'customer_id'=>9,
            'license_number'=>'50000009',
            'customer_initial'=>'LD',
            'customer_insertion'=>'',
            'customer_lastname'=>'Dijkuis',
            'customer_address'=>'somewhere 7',
            'customer_postal_code'=>'8080JA',
            'customer_town'=>'Someplace',
            'customer_phone'=>'+31-0000009',
            'customer_mobile'=>'06-00000009',
            'customer_email'=>'someone9@something.com',
            'customer_username'=>'customer9',
            'customer_password'=>'$2a$12$brIhkRWG8BgWRDwoPhRXrOZv5DTKsjChowI/br2MrSmypvdUaKsNW',
            'customer_status'=>'1',
            'email_confirmed'=>'',
            'is_admin'=>0,
            'remember_token'=>NULL,
            'created_at'=>'2018-01-01 00:00:00',
            'updated_at'=>'2018-01-01 00:00:00',
            'test_moment'=>NULL,
            'qualified'=>0
        ] );



        User::create( [
            'customer_id'=>10,
            'license_number'=>'50000010',
            'customer_initial'=>'ZM',
            'customer_insertion'=>'',
            'customer_lastname'=>'Dijkuis',
            'customer_address'=>'somewhere 7',
            'customer_postal_code'=>'8080JA',
            'customer_town'=>'Someplace',
            'customer_phone'=>'+31-0000010',
            'customer_mobile'=>'06-00000010',
            'customer_email'=>'someone10@something.com',
            'customer_username'=>'customer10',
            'customer_password'=>'$2a$12$brIhkRWG8BgWRDwoPhRXrOZv5DTKsjChowI/br2MrSmypvdUaKsNW',
            'customer_status'=>'1',
            'email_confirmed'=>'',
            'is_admin'=>0,
            'remember_token'=>NULL,
            'created_at'=>'2018-01-01 00:00:00',
            'updated_at'=>'2018-01-01 00:00:00',
            'test_moment'=>NULL,
            'qualified'=>0
        ] );
    }
}
