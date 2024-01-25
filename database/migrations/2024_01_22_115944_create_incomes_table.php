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
        Schema::create('incomes', function (Blueprint $table) {
            $table->id('id_income');

            //membuat variable amount sebagai desimal dg ketenteuan memiliki panjang 8 dan 2 digit dibelakang koma
            $table->decimal('amount', 8, 2);
            $table->date('date');

            //menambahkan kolom created_at sebagai timestamp untuk menggunakan nilai saat ini secara otomatis
            $table->timestamp('created_at')->useCurrent();

            //menambahkan kolom description sebagai string sepanjang 255 karakter
            $table->string('description', 255);

            //menambahkan kolom id_category sebagai foreigen key yang nantinya merujuk pada id_category ditable categories
            $table->unsignedBigInteger('id_category');
            $table->foreign('id_category')->references('id_category')->on('categories');

            //note: unsignedBigInteger digunakan untuk bilangan bulat yang tidak boleh negatif dan biasanya
            //tipe data ini digunakan untuk foreign key yang nantinya akan merujuk pada primary key di suatu table
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('incomes');
    }
};
