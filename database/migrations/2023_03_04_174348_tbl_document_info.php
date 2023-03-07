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
        Schema::create('tbl_document_info', function (Blueprint $table) {

            $table->id('document_id');
            $table->integer('rider_id');
            $table->string('driver_license');
            $table->string('official_receipt')->nullable();
            $table->string('cert_registration')->nullable();
            $table->string('nbi_clearance');
            $table->string('drug_test')->nullable();
            $table->string('rider_photo');
            $table->string('vehicle_front')->nullable();
            $table->string('vehicle_back')->nullable();
            $table->string('vehicle_side');
            $table->string('license_back');
            $table->string('auth_letter')->nullable();
            $table->string('deed_sale')->nullable();
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
          Schema::dropIfExists('tbl_document_info');
    }
};