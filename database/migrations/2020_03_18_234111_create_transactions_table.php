<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->bigIncrements('transaction_id');
            $table->timestamps();
            $table->bigInteger('user_shared_id')->unsigned();
            $table->bigInteger('user_received_id')->unsigned();
            $table->integer('qr_id');

            $table->foreign('user_shared_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('user_received_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('qr_id')->references('qrid')->on('qrCode')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transactions');
    }
}
