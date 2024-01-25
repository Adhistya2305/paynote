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
        Schema::create('balance', function (Blueprint $table) {
            //menyimpan variable id_balance sebagai  primary key dan auto increment
            $table->id('id_balance');

            //menyimpan variable amout yang panjangnya 10 digit dan 2 digit dibelakang koma
            $table->decimal(('amount'), 10, 2);


            //menambahkan update_at sebagai timestamp. dan menggunakan nilai saat ini secara otomatis
            $table->timestamp('updated_at')->useCurrent();
        });
 
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('balance');
    }
};
