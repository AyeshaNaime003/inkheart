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
        Schema::create('reviews', function (Blueprint $table) {
            $table->id('review_id');
            // foreign key from book
            $table->string('ISBN');
            $table->foreign('ISBN')->references('ISBN')->on('book')->onDelete('cascade');
            // foreign key from customer
            $table->bigInteger('customer_id');
            $table->foreign('customer_id')->references('customer_id')->on('customer')->onDelete('cascade');
            
            $table->string('review');
            $table->date('date');
            $table->timestamps('');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reviews');
    }
};
