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
    Schema::create('carts', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('product_id');
        $table->unsignedBigInteger('customer_id');
        $table->integer('qty');
        $table->bigInteger('price');
        $table->integer('weight');
        $table->timestamps();

        //relationship product
        $table->foreign('product_id')->references('id')->on('products');

        //relationship customer
        $table->foreign('customer_id')->references('id')->on('customers');
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carts');
    }
};
