<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Foreign extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('order', function($table) {
            $table->foreign('obj_id')->references('obj_id')->on('objects');
            $table->foreign('customer_id')->references('customer_id')->on('users');
        });

        Schema::table('order_option', function (Blueprint $table) {
            $table->foreign('option_id')->references('option_id')->on('option');
            $table->foreign('ordernumber')->references('ordernumber')->on('order');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
