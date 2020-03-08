<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePurchasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchases', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('manufacturer');
            $table->string('invoice_no');
            $table->decimal('payment');
            $table->string('item_information');
            $table->unsignedBigInteger('batch_id');
            $table->dateTime('expire_date');
            $table->string('stock');
            $table->string('quantity');
            $table->decimal('manufacturer_price');
            $table->string('total');
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
        Schema::dropIfExists('purchases');
    }
}