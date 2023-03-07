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
        Schema::create('tbl_rider_account', function (Blueprint $table) {
            $table->id('rider_id');
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
            $table->string('address');
            $table->string('city');
            $table->string('barangay');
            $table->integer('zip_code');
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
        Schema::dropIfExists('tbl_rider_account');
    }
};