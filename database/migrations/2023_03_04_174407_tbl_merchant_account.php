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
        Schema::create('tbl_merchant_account', function (Blueprint $table) {

            $table->id('merchant_id');
            $table->string('password');
            $table->string('firstname');
            $table->string('middlename');
            $table->string('lastname');
            $table->string('suffix')->nullable();
            $table->integer('age');
            $table->string('gender');
            $table->string('birthdate');
            $table->string('email');
            $table->string('mobile_number');
            $table->longText('address');
            $table->string('city');
            $table->string('barangay');
            $table->integer('zip_code');
            $table->string('role');
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
          Schema::dropIfExists('tbl_merchant_account');
    }
};