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
        Schema::create('bookdiscount', function (Blueprint $table) {
            $table->id('discount_id');
            // foreign key from books table
            $table->string('ISBN');
            $table->foreign('ISBN')->references('ISBN')->on('book')->onDelete('cascade');
            
            $table->decimal('discount_percentage');
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
        Schema::dropIfExists('bookdiscount');
    }
};
