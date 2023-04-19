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
        Schema::create('app_users', function (Blueprint $table) {
            $table->id('user_id');
            $table->string('firstname');
            $table->string('middlename');
            $table->string('lastname');
            $table->integer('height');
            $table->integer('weight');
            $table->string('gender');
            $table->string('address');
            $table->integer('age');
            $table->string('contact_number');
            $table->float('bmi',8,2);
            $table->string('email');
            $table->string('password');
            $table->string('lifestyle');
            $table->text('preferences');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('app_users');
    }
};