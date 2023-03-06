<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('admin_account', function (Blueprint $table) {

            $table->id('admin_id');
            $table->string('email');
            $table->string('password');
            $table->timestamp('date')->useCurrent();
            });

            $password = Hash::make('foodea2023');
            DB::table('admin_account')->insert(
             array(
            'email' => 'foodea@gmail.com',
            'password' =>  $password
        )
    );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admin_account');
    }
};