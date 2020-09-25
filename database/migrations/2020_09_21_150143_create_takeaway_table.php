<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTakeawayTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('takeaway', function (Blueprint $table) {
            $table->bigIncrements('id');
          $table->string('order_number');
           $table->string('user');
           $table->enum('status',['pending','accepted','completed', 'decline'])->default('pending');
           $table->float('grand_total');
           $table->integer('item_count');
           $table->boolean('is_paid')->default(false);
           $table->enum('payment_method', ['cash_on_delivery','paypal','bKash','card','cash'])->default('cash_on_delivery');
           $table->string('shipping_name');
           $table->string('shipping_address');
           $table->string('shipping_city');
           $table->string('shipping_phone');
           $table->string('shipping_notes')->nullable();

           //$table->foreign('user')->references('username')->on('customers')->onDelete('cascade');
            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('takeaway');
    }
}
