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
            $table->string('vehicle_type')->nullable();
            $table->string('vehicle_ownership')->nullable();
            $table->string('plate_number')->nullable();
            $table->string('displacement')->nullable();
            $table->integer('engine_number')->nullable();
            $table->integer('year_model')->nullable();
            $table->string('emergency_name')->nullable();
            $table->string('relationship')->nullable();
            $table->string('contact_number')->nullable();
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