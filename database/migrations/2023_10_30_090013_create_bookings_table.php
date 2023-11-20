<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->string('unique_key')->unique();
            $table->boolean('soft_delete')->default(0);

            $table->string('date')->nullable();
            $table->string('customername')->nullable();
            $table->string('fathername')->nullable();
            $table->string('husbandname')->nullable();
            $table->string('mobileno')->nullable();
            $table->string('idproofone')->nullable();
            $table->string('idproof_no')->nullable();
            $table->longText('proofimage_one')->nullable();
            $table->string('idprooftwo')->nullable();
            $table->longText('proofimage_two')->nullable();
            $table->string('address')->nullable();
            $table->string('street')->nullable();
            $table->string('area')->nullable();
            $table->string('city')->nullable();
            $table->string('pincode')->nullable();
            $table->string('dateof_site_visit')->nullable();
            $table->unsignedBigInteger('reference');
            $table->string('block')->nullable();
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
        Schema::dropIfExists('bookings');
    }
};
