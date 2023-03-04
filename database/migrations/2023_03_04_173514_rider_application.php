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
        Schema::create('rider_application', function (Blueprint $table) {

            $table->id('rider_application_id');
            $table->integer('rider_id')->nullable();
            $table->integer('vehicle_id')->nullable();
            $table->integer('document_id')->nullable();
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
          Schema::dropIfExists('rider_application');
    }
};