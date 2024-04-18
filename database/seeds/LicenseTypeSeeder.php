<?php

use Illuminate\Database\Seeder;
use App\LicenseType;

class LicenseTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        LicenseType::create( [
            'license_number'=>'50000001',
            'license_type'=>'B',
            'created_at'=>NULL,
            'updated_at'=>NULL
        ] );

        LicenseType::create( [
            'license_number'=>'50000001',
            'license_type'=>'BE',
            'created_at'=>NULL,
            'updated_at'=>NULL
        ] );

        LicenseType::create( [
            'license_number'=>'50000002',
            'license_type'=>'BE',
            'created_at'=>NULL,
            'updated_at'=>NULL
        ] );

        LicenseType::create( [
            'license_number'=>'50000003',
            'license_type'=>'C',
            'created_at'=>NULL,
            'updated_at'=>NULL
        ] );

        LicenseType::create( [
            'license_number'=>'50000004',
            'license_type'=>'B',
            'created_at'=>NULL,
            'updated_at'=>NULL
        ] );

        LicenseType::create( [
            'license_number'=>'50000005',
            'license_type'=>'B',
            'created_at'=>NULL,
            'updated_at'=>NULL
        ] );

        LicenseType::create( [
            'license_number'=>'50000006',
            'license_type'=>'C',
            'created_at'=>NULL,
            'updated_at'=>NULL
        ] );

        LicenseType::create( [
            'license_number'=>'50000007',
            'license_type'=>'B',
            'created_at'=>NULL,
            'updated_at'=>NULL
        ] );

        LicenseType::create( [
            'license_number'=>'50000008',
            'license_type'=>'B',
            'created_at'=>NULL,
            'updated_at'=>NULL
        ] );

        LicenseType::create( [
            'license_number'=>'50000009',
            'license_type'=>'BE',
            'created_at'=>NULL,
            'updated_at'=>NULL
        ] );

        LicenseType::create( [
            'license_number'=>'50000010',
            'license_type'=>'B',
            'created_at'=>NULL,
            'updated_at'=>NULL
        ] );
    }
}
