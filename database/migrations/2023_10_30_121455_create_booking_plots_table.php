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
        Schema::create('booking_plots', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('booking_id');
            $table->foreign('booking_id')->references('id')->on('bookings')->onDelete('cascade');
            
            $table->string('projectname')->nullable();
            $table->string('block')->nullable();

            $table->unsignedBigInteger('plot_id');
            $table->foreign('plot_id')->references('id')->on('plots')->onDelete('cascade');
            
            $table->string('plot_no')->nullable();
            $table->string('square_feet')->nullable();
            $table->string('ratepersqft')->nullable();
            $table->string('total')->nullable();
            $table->string('paid_amount')->nullable();
            $table->string('balance_amount')->nullable();
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
        Schema::dropIfExists('booking_plots');
    }
};
