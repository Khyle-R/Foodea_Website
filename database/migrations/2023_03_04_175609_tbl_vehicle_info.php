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
        Schema::create('tbl_vehicle_info', function (Blueprint $table) {

            $table->id('vehicle_id');
            $table->integer('rider_id');
            $table->string('vehicle_type');
            $table->string('vehicle_ownership');
            $table->string('plate_number');
            $table->string('displacement');
            $table->integer('engine_number');
            $table->integer('year_model');
            $table->string('emergency_name');
            $table->string('relationship');
            $table->string('contact_number');
            $table->timestamp('datee')->useCurrent();
            });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
          Schema::dropIfExists('tbl_vehicle_info');
    }
};