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
        Schema::create('tbl_inventory', function (Blueprint $table) {

            $table->id('inventory_id');
            $table->integer('merchant_id');
            $table->integer('category_id');
            $table->string('product_name');
            $table->integer('price');
            $table->string('product_image');
            $table->integer('stock');
            $table->string('status');
            $table->string('description');
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
          Schema::dropIfExists('tbl_inventory');
    }
};