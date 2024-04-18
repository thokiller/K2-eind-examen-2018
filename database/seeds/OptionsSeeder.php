<?php

use App\Options;
use Illuminate\Database\Seeder;

class OptionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Options::create( [
            'option_id'=>1,
            'option_description'=>'Voortent',
            'option_price'=>100.00,
            'created_at'=>NULL,
            'updated_at'=>NULL
        ] );



        Options::create( [
            'option_id'=>2,
            'option_description'=>'Bijzettent',
            'option_price'=>75.00,
            'created_at'=>NULL,
            'updated_at'=>NULL
        ] );



        Options::create( [
            'option_id'=>3,
            'option_description'=>'Windscherm',
            'option_price'=>20.00,
            'created_at'=>NULL,
            'updated_at'=>NULL
        ] );



        Options::create( [
            'option_id'=>4,
            'option_description'=>'Barbecue',
            'option_price'=>30.00,
            'created_at'=>NULL,
            'updated_at'=>NULL
        ] );



        Options::create( [
            'option_id'=>5,
            'option_description'=>'Skottelbraai',
            'option_price'=>50.00,
            'created_at'=>NULL,
            'updated_at'=>NULL
        ] );



        Options::create( [
            'option_id'=>6,
            'option_description'=>'Televisietoestel, schotelantenne en abonnement',
            'option_price'=>90.00,
            'created_at'=>NULL,
            'updated_at'=>NULL
        ] );



        Options::create( [
            'option_id'=>7,
            'option_description'=>'Uitbreidingsset servies en bestek (per couvert)',
            'option_price'=>5.00,
            'created_at'=>NULL,
            'updated_at'=>NULL
        ] );



        Options::create( [
            'option_id'=>8,
            'option_description'=>'Annuleringsverzekering',
            'option_price'=>50.00,
            'created_at'=>NULL,
            'updated_at'=>NULL
        ] );



        Options::create( [
            'option_id'=>9,
            'option_description'=>'Inboedelverzekering',
            'option_price'=>40.00,
            'created_at'=>NULL,
            'updated_at'=>NULL
        ] );



        Options::create( [
            'option_id'=>10,
            'option_description'=>'Verzekering hagelschade',
            'option_price'=>50.00,
            'created_at'=>NULL,
            'updated_at'=>NULL
        ] );
    }
}
