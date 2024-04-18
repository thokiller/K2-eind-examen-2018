<?php

use Illuminate\Database\Seeder;
use App\Promos;

class PromosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Promos::create( [
            'id'=>1,
            'object_id'=>1,
            'percentage'=>10,
            'active'=>1
        ] );
    }
}
