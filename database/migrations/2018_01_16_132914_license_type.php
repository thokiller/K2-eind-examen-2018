<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class LicenseType extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('license_type', function (Blueprint $table) {
            $table->string('license_number');
            $table->string('license_type');
            $table->timestamps();

            $table->primary(['license_number', 'license_type']);

            $table->foreign('license_number')->references('license_number')->on('license');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('LicenseType');
    }
}
