<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order', function (Blueprint $table) {
            $table->increments('id');
            $table->string('customer_id');
            $table->string('ship_address');
            $table->string('ship_name');
            $table->string('ship_email');
            $table->string('ship_phone');
            $table->string('payment_method');
            $table->integer('total_price');
            $table->integer('status')->default(0); // -1. huỷ | 0. đang chờ xử lý | 1. đã nhận đơn hàng | 2. hoàn thành.
            $table->foreign('customer_id')->references('id')->on('customers');
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
        Schema::dropIfExists('order');
    }
}
