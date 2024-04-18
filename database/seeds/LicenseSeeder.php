<?php

use App\License;
use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LicenseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        License::insert([
            [
                'license_number' => '50000001',
                'license_issued' => '2017-09-14 00:00:00',
                'license_valid_till' => '2027-09-14 00:00:00',
                'created_at' => NULL,
                'updated_at' => NULL
            ],
            [
                'license_number' => '50000002',
                'license_issued' => '2016-09-14 00:00:00',
                'license_valid_till' => '2026-09-14 00:00:00',
                'created_at' => NULL,
                'updated_at' => NULL
            ],
            [
                'license_number' => '50000003',
                'license_issued' => '2013-01-14 00:00:00',
                'license_valid_till' => '2023-01-14 00:00:00',
                'created_at' => NULL,
                'updated_at' => NULL
            ],
            [
                'license_number' => '50000004',
                'license_issued' => '2017-09-14 00:00:00',
                'license_valid_till' => '2027-09-14 00:00:00',
                'created_at' => NULL,
                'updated_at' => NULL
            ],
            [
                'license_number' => '50000005',
                'license_issued' => '2017-04-14 00:00:00',
                'license_valid_till' => '2027-04-14 00:00:00',
                'created_at' => NULL,
                'updated_at' => NULL
            ],
            [
                'license_number' => '50000006',
                'license_issued' => '2017-12-14 00:00:00',
                'license_valid_till' => '2027-12-14 00:00:00',
                'created_at' => NULL,
                'updated_at' => NULL
            ],
            [
                'license_number' => '50000007',
                'license_issued' => '2014-12-16 00:00:00',
                'license_valid_till' => '2024-12-16 00:00:00',
                'created_at' => NULL,
                'updated_at' => NULL
            ],
            [
                'license_number' => '50000008',
                'license_issued' => '2017-09-14 00:00:00',
                'license_valid_till' => '2027-09-14 00:00:00',
                'created_at' => NULL,
                'updated_at' => NULL
            ],
            [
                'license_number' => '50000009',
                'license_issued' => '2017-11-14 00:00:00',
                'license_valid_till' => '2027-11-14 00:00:00',
                'created_at' => NULL,
                'updated_at' => NULL
            ],
            [
                'license_number' => '50000010',
                'license_issued' => '2017-08-14 00:00:00',
                'license_valid_till' => '2027-08-14 00:00:00',
                'created_at' => NULL,
                'updated_at' => NULL
            ]
        ]);
    }
}
