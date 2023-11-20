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
        Schema::create('booking_payments', function (Blueprint $table) {
            $table->id();
            $table->string('unique_key')->unique();
            $table->boolean('soft_delete')->default(0);

            $table->unsignedBigInteger('booking_id');
            $table->foreign('booking_id')->references('id')->on('bookings')->onDelete('cascade');

            $table->unsignedBigInteger('plot_id');
            $table->foreign('plot_id')->references('id')->on('plots')->onDelete('cascade');

            $table->string('date')->nullable();
            $table->string('bill_no')->nullable();
            $table->string('block')->nullable();
            $table->string('plot_no')->nullable();
            $table->string('sqft')->nullable();
            $table->string('ratepersqft')->nullable();
            $table->string('totalamount')->nullable();

            $table->string('payment_method')->nullable();
            $table->string('terms')->nullable();
            $table->string('payableamount')->nullable();

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
        Schema::dropIfExists('booking_payments');
    }
};
