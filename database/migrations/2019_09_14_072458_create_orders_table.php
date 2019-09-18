<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('ordernumber');
            $table->UnsignedbigInteger('customerid');
            $table->foreign('customerid')->references('id')->on('users')->onDelete('cascade');
            $table->double('amount');
            $table->UnsignedbigInteger('orderproductsid');
            $table->foreign('orderproductsid')->references('id')->on('orderproducts')->onDelete('cascade');
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
        Schema::dropIfExists('orders');
    }
}
