<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Order extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order', function (Blueprint $table) {
        $table->increments('ordernumber')->unsigned();
        $table->datetime('date_ordered');
        $table->integer('customer_id')->unsigned();
        $table->integer('obj_id')->unsigned();
        $table->datetime('obj_date_in');
        $table->datetime('obj_date_out');
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
