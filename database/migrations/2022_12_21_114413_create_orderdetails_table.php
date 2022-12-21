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
        Schema::create('orderdetails', function (Blueprint $table) {
            $table->id('detail_id');
            // foreign key from book table
            $table->string('ISBN');
            $table->foreign('ISBN')->references('ISBN')->on('book')->onDelete('cascade');
            // foreign key from order table
            $table->bigInteger('order_id');
            $table->foreign('order_id')->references('order_id')->on('order')->onDelete('cascade');
            // foreign key from discount table
            $table->bigInteger('discount_id');
            $table->foreign('discount_id')->references('discount_id')->on('bookdiscount')->onDelete('cascade');
            
            $table->integer('quantity');
            $table->decimal('amount');
            $table->timestamps();

            // making the coposition of two attributes unique
            $table->unique(['ISBN', 'order_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orderdetails');
    }
};
