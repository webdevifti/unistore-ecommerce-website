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
        Schema::create('product_specifications', function (Blueprint $table) {
            $table->id();
            $table->integer('product_id');
            $table->string('os')->nullable();
            $table->string('processor')->nullable();
            $table->string('processor_tech')->nullable();
            $table->string('graphics')->nullable();
            $table->string('memory')->nullable();
            $table->string('hard_drive')->nullable();
            $table->string('wireless')->nullable();
            $table->string('power_supply')->nullable();
            $table->string('battery')->nullable();
            $table->string('back_cemara')->nullable();
            $table->string('front_cemara')->nullable();
            $table->string('fingerprint')->nullable();
            $table->string('sensor')->nullable();
            $table->string('bluetooth')->nullable();
            $table->text('other')->nullable();
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
        Schema::dropIfExists('product_specifications');
    }
};
