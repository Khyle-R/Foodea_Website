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
        Schema::create('tbl_product', function (Blueprint $table) {

            $table->id('product_id');
            $table->integer('merchant_id');
            $table->string('category_name');
            $table->integer('category_id')->nullable();
            $table->string('ingredients');
            $table->string('product_name');
            $table->decimal('price');
            $table->integer('calories')->nullable();
            $table->string('product_image');
            $table->string('tags');
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
          Schema::dropIfExists('tbl_product');
    }
};