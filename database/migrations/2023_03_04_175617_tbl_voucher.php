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
        Schema::create('tbl_voucher', function (Blueprint $table) {

            $table->id('voucher_id');
            $table->integer('merchant_id');
            $table->string('voucher_name');
            $table->string('voucher_code');
            $table->string('discount');
            $table->integer('total_claimed');
            $table->longText('description');
            $table->string('status');
            $table->string('exp_date');
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
          Schema::dropIfExists('tbl_voucher');
    }
};