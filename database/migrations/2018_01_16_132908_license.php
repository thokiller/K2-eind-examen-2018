<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class License extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('license', function (Blueprint $table) {
            $table->string('license_number');
            $table->datetime('license_issued');
            $table->datetime('license_valid_till');
            $table->timestamps();

            $table->primary('license_number');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('License');
    }
}
