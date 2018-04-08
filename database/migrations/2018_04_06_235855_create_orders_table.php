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
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('vendor_id');
            $table->string('pickup_address_1');
            $table->string('pickup_address_2')->default('');
            $table->string('pickup_suburb');
            $table->string('pickup_postcode');
            $table->string('delivery_address_1');
            $table->string('delivery_address_2')->default('');
            $table->string('delivery_suburb');
            $table->string('delivery_postcode');
            $table->datetime('eta')->nullable();
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
