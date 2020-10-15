<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bills', function (Blueprint $table) {
            $table->bigIncrements('id_bill');
            $table->foreing('id_personal')->references('id')->on('personal');
            $table->foreing('id_client')->references('id')->on('client');
            $table->foreing('id_product')->references('id')->on('product');
            $table->string('description_bill');
            $table->date('date_bill');
            $table->string('quantity_bill');
            $table->string('unit_bill');
            $table->string('price_bill');
            $table->string('subtotal_bill');

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
        Schema::dropIfExists('bills');
    }
}
