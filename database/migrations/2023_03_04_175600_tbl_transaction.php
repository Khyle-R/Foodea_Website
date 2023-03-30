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
        Schema::create('tbl_transaction', function (Blueprint $table) {

            $table->id('transaction_id');
            $table->string('order_key');
            $table->integer('merchant_id');
            $table->integer('order_id');
            $table->integer('rider_id');
            $table->integer('product_Id');
            $table->string('order_status');
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
          Schema::dropIfExists('tbl_transaction');
    }
};