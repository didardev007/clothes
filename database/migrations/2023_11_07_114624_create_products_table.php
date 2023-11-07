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
            $table->unsignedBigInteger('merchant_id');
            $table->foreign('merchant_id')->references('id')->on('merchants')->cascadeOnDelete();
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('id')->on('categories')->cascadeOnDelete();
            $table->unsignedBigInteger('brand_id');
            $table->foreign('brand_id')->references('id')->on('brands')->cascadeOnDelete();
            $table->unsignedBigInteger('gender_id');
            $table->foreign('gender_id')->references('id')->on('genders')->cascadeOnDelete();
            $table->unsignedBigInteger('color_id');
            $table->foreign('color_id')->references('id')->on('colors')->cascadeOnDelete();
            $table->unsignedBigInteger('discount_menu_id');
            $table->foreign('discount_menu_id')->references('id')->on('discount_menus')->cascadeOnDelete();
            $table->unsignedBigInteger('popular_menu_id');
            $table->foreign('popular_menu_id')->references('id')->on('popular_menus')->cascadeOnDelete();
            $table->unsignedBigInteger('favorite_menu_id');
            $table->foreign('favorite_menu_id')->references('id')->on('favorite_menus')->cascadeOnDelete();
            $table->string('product_code')->index();
            $table->string('group_code')->index();
            $table->string('name');
            $table->string('name_ru')->nullable();
            $table->string('image')->nullable();
            $table->unsignedTinyInteger('discount_price')->default(0);
            $table->unsignedDouble('sell_price')->default(0);
            $table->boolean('has_discount')->default(0);
            $table->boolean('has_stock')->default(0);
            $table->unsignedBigInteger('average_rating')->default(0);
            $table->unsignedBigInteger('ratings_count')->default(0);
            $table->unsignedBigInteger('favorites_count')->default(0);
            $table->boolean('random')->default(0);
            $table->timestamps();
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
