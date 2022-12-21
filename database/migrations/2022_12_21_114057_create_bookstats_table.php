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
        Schema::create('bookstats', function (Blueprint $table) {
            $table->string('ISBN')->primary();
            $table->foreign('ISBN')->references('ISBN')->on('book')->onDelete('cascade');
            $table->decimal('price')->default('0.0');
            $table->integer('quantity')->default('0');
            $table->integer('sold')->default('0');
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
        Schema::dropIfExists('bookstats');
    }
};
