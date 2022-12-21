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
        Schema::create('admin', function (Blueprint $table) {
            $table->id('admin_id');
            $table->string('first_name', 50);
            $table->string('last_name', 50);
            $table->string('email');
            $table->string('password');
            $table->string('job_title')->default('employee');
            // permissions (based on linux):
            // 0 -> no permission
            // 1 -> read
            // 2 -> create+update
            // 3 -> create+update and read
            // 4 -> delete
            // 5 -> delete and read
            // 6 -> delete and create+update
            // 7 -> all CRUD operations  
            $table->enum('permissions', ['0', '1', '2', '3', '4', '5', '6', '7']);
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
        Schema::dropIfExists('admin');
    }
};
