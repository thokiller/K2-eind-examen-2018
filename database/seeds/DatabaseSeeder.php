<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(LicenseSeeder::class);
        $this->call(LicenseTypeSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(ObjectsSeeder::class);
        $this->call(OptionsSeeder::class);
        //$this->call(OrdersSeeder::class);
        //$this->call(OrderOptionsSeeder::class);
        $this->call(PromosSeeder::class);
    }
}
