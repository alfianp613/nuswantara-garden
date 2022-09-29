<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Payment extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payment', function (Blueprint $table) {
            $table->id('paymentid');
            $table->unsignedBigInteger('penyedekahid');
            $table->unsignedBigInteger('petaniid');
            $table->decimal('nominal_pembayaran',$precision=15, $scale=2);
            $table->timestamp('timestamp_pembayaran');
            $table->unsignedBigInteger('gatewayid');
            $table->foreign('penyedekahid')->references('penyedekahid')->on('penyedekah');
            $table->foreign('petaniid')->references('petaniid')->on('petani');
            $table->foreign('gatewayid')->references('gatewayid')->on('payment_gateway');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payment');
    }
}
