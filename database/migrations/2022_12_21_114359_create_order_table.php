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
        Schema::create('order', function (Blueprint $table) {
            $table->id('order_id');
            // foreign key from customer table
            $table->bigInteger('customer_id');
            $table->foreign('customer_id')->references('customer_id')->on('customer')->onDelete('cascade');
            // foreign key from paymentdetails table
            $table->bigInteger('payment_id');
            $table->foreign('payment_id')->references('payment_id')->on('paymentdetails')->onDelete('cascade');
            // foreign key from city table
            $table->bigInteger('city_id');
            $table->foreign('city_id')->references('city_id')->on('city')->onDelete('cascade');
            // foreign key from state table
            $table->bigInteger('state_id');
            $table->foreign('state_id')->references('state_id')->on('state')->onDelete('cascade');
            
            $table->string('phone_number');
            $table->string('country')->default('Pakistan');
            $table->string('postal_code')->nullable();
            $table->string('address');
            $table->decimal('total_amount');
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
        Schema::dropIfExists('order');
    }
};
