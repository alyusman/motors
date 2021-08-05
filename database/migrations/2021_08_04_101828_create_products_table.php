<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('title');
            $table->string('status');
            $table->string('stock_location');
            $table->string('stock_port');
            $table->string('veh_type');
            $table->string('model');
            $table->string('trans');
            $table->string('drive');
            $table->string('mileage');
            $table->integer('price');
            $table->string('dealer');
            $table->string('fuel');
            $table->string('chasis_no');
            $table->text('photo');
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
