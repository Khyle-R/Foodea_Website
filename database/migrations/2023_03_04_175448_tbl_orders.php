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
        Schema::create('tbl_orders', function (Blueprint $table) {

            $table->id('order_id');
            $table->integer('merchant_id');
            $table->integer('customer_id');
            $table->integer('product_id');
            $table->integer('quantity');
            $table->double('total');
            $table->string('status');
            $table->string('payment_type');
            $table->timestamp('date')->useCurrent();
            });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
          Schema::dropIfExists('tbl_orders');
    }
};