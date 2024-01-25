<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        //membuat sebuah table categories dengan skema builder
        Schema::create('categories', function (Blueprint $table) {

            //menyimpan id_category sebagai primary key auto increment
            $table->id('id_category');
            $table->string('name_category');
            $table->timestamps();
        });
 
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
