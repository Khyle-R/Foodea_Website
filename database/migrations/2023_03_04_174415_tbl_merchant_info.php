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
        Schema::create('tbl_merchant_info', function (Blueprint $table) {

            $table->id('merchantinfo_id');
            $table->integer('merchant_id');
            $table->string('business_type');
            $table->string('business_name');
            $table->string('date_founded');
            $table->string('country');
            $table->string('address');
            $table->string('city');
            $table->string('barangay');
            $table->string('street');
            $table->string('postal_code');
            $table->string('store_number');
            $table->string('store_email');
            $table->longText('mission');
            $table->longText('vision');
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
          Schema::dropIfExists('tbl_merchant_info');
    }
};