<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Objects extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('objects', function (Blueprint $table) {
            $table->increments('obj_id');
            $table->text('license_plate');
            $table->text('chassis_number');
            $table->text('obj_type');
            $table->text('brand');
            $table->text('type');
            $table->integer('year');
            $table->integer('mass_inventory');
            $table->integer('mass_max');
            $table->integer('length_till');
            $table->integer('length_construction');
            $table->integer('height');
            $table->text('license_needed');
            $table->float('price_day');
            $table->float('price_week');
            $table->longText('image_link');
            $table->longText('day_view_image_link');
            $table->longText('night_view_image_link');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Object');
    }
}
