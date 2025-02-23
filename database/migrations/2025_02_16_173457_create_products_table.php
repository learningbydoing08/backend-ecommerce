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
    Schema::create('products', function (Blueprint $table) {
        $table->id();
        $table->string('image');
        $table->string('title');
        $table->string('slug');
        $table->unsignedBigInteger('category_id');
        $table->unsignedBigInteger('user_id');
        $table->text('description');
        $table->integer('weight');
        $table->bigInteger('price');
        $table->integer('stock');
        $table->integer('discount');
        $table->timestamps();

        //relationship category
        $table->foreign('category_id')->references('id')->on('categories');

        //relationship user
        $table->foreign('user_id')->references('id')->on('users');
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
