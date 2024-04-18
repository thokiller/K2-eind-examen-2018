<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('customer_id')->unsigned();
            $table->string('license_number');
            $table->string('customer_initial');
            $table->string('customer_insertion')->nullable();
            $table->string('customer_lastname');
            $table->string('customer_address');
            $table->string('customer_postal_code');
            $table->string('customer_town');
            $table->string('customer_phone')->nullable();
            $table->string('customer_mobile');
            $table->string('customer_email');
            $table->string('test_moment')->nullable();
            $table->boolean('qualified');
            $table->string('customer_username');
            $table->string('customer_password');
            $table->string('customer_status');
            $table->string('email_confirmed');
            $table->integer('is_admin');

            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
