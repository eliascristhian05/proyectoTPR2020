<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id_product');
            $table->foreing('id_personal')->references('id')->on('personal');
            $table->foreing('id_provider')->references('id')->on('provider');
            $table->string('name_product');
            $table->string('unidad_product');
            $table->string('quantity_product');
            $table->date('date_product');
            $table->string('price_product');
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
        Schema::dropIfExists('products');
    }
}
