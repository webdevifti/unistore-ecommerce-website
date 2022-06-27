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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->integer('category_id')->nullable();
            $table->integer('brand_id')->nullable();
            $table->integer('sku');
            $table->string('product_name');
            $table->string('slug');
            $table->string('thumbnail')->nullable();
            $table->integer('qty');
            $table->integer('discount')->nullable();
            $table->integer('discounted_price')->nullable();
            $table->integer('stock_alert')->nullable();
            $table->integer('regular_price')->nullable();
            $table->integer('selling_price')->nullable();
            $table->longText('description')->nullable();
            $table->integer('status')->default(1);
            $table->integer('is_slider_show')->default(0);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};
