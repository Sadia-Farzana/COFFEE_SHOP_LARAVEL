<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->bigIncrements('c_id');
            $table->string('name');
            $table->string('username');
            $table->string('password');

            $table->string('phone');
            $table->string('email');
            $table->string('address');
            $table->string('gender');
            $table->string('image')->nullable($value = true);
            $table->string('membership')->nullable($value = true);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //Schema::dropIfExists('customers');
    }
}
