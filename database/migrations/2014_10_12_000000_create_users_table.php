<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email')->unique();
            $table->integer('mobile_number')->nullable();
            $table->string('city_address')->nullable();
            $table->string('gender')->nullable();;
            $table->string('occupation')->nullable();
            $table->string('company_name')->nullable();
            $table->string('industry')->nullable();
            $table->string('user_name')->unique();
            $table->string('user_password')->unique();
            $table->string('user_role')->nullable();
            $table->string('remember_token')->nullable();
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
        Schema::dropIfExists('users');
    }
}
