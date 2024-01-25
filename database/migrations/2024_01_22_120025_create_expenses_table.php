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
        Schema::create('expenses', function (Blueprint $table) {
            $table->id('id_expense');
            $table->decimal('amount', 8, 2);
            $table->date('date');
            $table->timestamp('created_at')->useCurrent();
            $table->string('description', 255);

            //menggunakan kolom id_category sbg foreign key yang nantinya akan merujuk pada id_category di table categories
            $table->unsignedBigInteger('id_category');
            $table->foreign('id_category')->references('id_category')->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('expenses');
    }
};
