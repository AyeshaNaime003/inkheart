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
        Schema::create('book', function (Blueprint $table) {
            $table->string('ISBN')->primary();
            $table->string('title');
            $table->string('description', 2000);
            $table->string('img_link')->default('https://images.template.net/2905/Simple-Children-s-Story-Book-Cover-Template-2x.jpg');
            $table->string('language')->default('en');
            $table->string('edition')->nullable();
            // foreign key from type table
            $table->bigInteger('type_id')->default('0');
            $table->foreign('type_id')->references('type_id')->on('type')->onDelete('cascade');
            // foreign key from author table
            $table->bigInteger('auth_id');
            $table->foreign('auth_id')->references('auth_id')->on('author')->onDelete('cascade');
            // foreign key from publisher table
            $table->bigInteger('publisher_id');
            $table->foreign('publisher_id')->references('publisher_id')->on('publisher')->onDelete('cascade');
            $table->date('publication_date');
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
        Schema::dropIfExists('book');
    }
};
