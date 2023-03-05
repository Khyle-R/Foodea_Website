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
        Schema::create('tbl_superadmin_log', function (Blueprint $table) {

            $table->id('log_id');
            $table->string('email')->nullable();
            $table->string('name')->nullable();
            $table->string('description');
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
          Schema::dropIfExists('tbl_superadmin_log');
    }
};