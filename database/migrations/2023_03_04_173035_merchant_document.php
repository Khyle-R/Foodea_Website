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
        Schema::create('merchant_document', function (Blueprint $table) {

            $table->id('merchant_document_id');
            $table->integer('merchant_id');
            $table->string('logo');
            $table->string('menu_photo');
            $table->string('business_permit');
            $table->string('bir_cert');
            $table->string('barangay_permit');
            $table->string('dti_cert');
            $table->string('front_license');
            $table->string('back_license');
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
          Schema::dropIfExists('merchant_document');
    }
};