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
        Schema::create('tbl_claimed', function (Blueprint $table) {

            $table->id('claimed_id');
            $table->integer('voucher_id');
            $table->integer('voucher_code');
            $table->string('user_id');
            $table->string('user_name');
            $table->integer('price');
            $table->timestamp('claimed_date')->useCurrent();
            });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
          Schema::dropIfExists('tbl_claimed');
    }
};