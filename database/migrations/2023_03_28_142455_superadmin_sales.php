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
       Schema::create('superadmin_sales', function (Blueprint $table) {

            $table->id('superadmin_sales_id');
            $table->integer('merchant_id');
            $table->string('name');
            $table->double('total');
            $table->double('revenue');
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
          Schema::dropIfExists('superadmin_sales');
    }
};