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
        Schema::create('tbl_accepted_rider', function (Blueprint $table) {

            $table->id('accepted_rider_id');
            $table->integer('rider_id');
            $table->integer('credit_score');
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
          Schema::dropIfExists('tbl_accepted_rider');
    }
};