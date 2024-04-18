<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class OrderOption extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_option', function (Blueprint $table) {
            $table->integer('ordernumber')->unsigned();
            $table->integer('option_id')->unsigned();
            $table->datetime('option_date_in');
            $table->datetime('option_date_out');
            $table->timestamps();

            $table->primary(['ordernumber', 'option_id']);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('OrderOption');
    }
}
