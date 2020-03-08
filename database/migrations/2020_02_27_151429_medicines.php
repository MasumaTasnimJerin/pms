<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Medicines extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('medicines', function (Blueprint $table) {
          $table->bigIncrements('id');

          $table->string('name');
          $table->unsignedBigInteger('category');
          $table->decimal('purchase_price');
          $table->decimal('selling_price');
          $table->string('quantity');
          $table->string('medicine_shelf');
          $table->string('generic_name');
          $table->string('company');
          $table->string('effects');
          $table->dateTime('expire_date');

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
        Schema::dropIfExists('medicines');
    }
}
