<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username');
            $table->string('password');
            $table->string('full_name');
            $table->string('address');
            $table->string('avatar')->nullable();
            $table->integer('gender');
            $table->string('email')->unique();
            $table->string('DOB');
            $table->integer('role')->unsigned();
            $table->integer('status')->default(1);
            $table->timestamps();
            $table->rememberToken();
            $table->foreign('role')->references('id')->on('role');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user');
    }
}
