<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    //menyimpan perubahan saat dilakukan sebuah migrasi
    {
        Schema::create('users', function (Blueprint $table) {
            //menyimpan kolom id sebagai primary key
            $table->id();

            //menyimpan kolom nama sebagai string
            $table->string('name');

            //menyimpan kolom email sebagai string yang tidak bisa diduplikat
            $table->string('email')->unique();

            //menyimpan kolom email vrified_at untuk menyimppan waktu yang juga bisa bersifat nullable(boleh kosong)
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');

            //melakukan ontetifikasi
            $table->rememberToken();

            //untuk membuat 2 kolom "created_at" dan update_at untuk menyimpan penambahan data atau update data
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
