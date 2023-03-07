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
        Schema::create('merchant_application', function (Blueprint $table) {

            $table->id('merchant_application_id');
            $table->integer('merchant_id')->nullable();
            $table->integer('merchantinfo_id')->nullable();
            $table->integer('merchant_document_id')->nullable();
            $table->string('status')->nullable();
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
          Schema::dropIfExists('merchant_application');
    }
};