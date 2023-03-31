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
        Schema::create('tbl_admin_role', function (Blueprint $table) {
            $table->id('admin_role_id');
            $table->integer('merchant_id');
            $table->integer('merchant_document_id');
            $table->integer('merchant_info_id');
            $table->string('email');
            $table->string('password');
            $table->integer('status');
            $table->string('role');
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
        Schema::dropIfExists('tbl_admin_role');
    }
};