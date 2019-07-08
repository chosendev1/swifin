<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWaterBillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('water_bills', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('customer_account');
            $table->string('phone_number');
            $table->mediumText('location');
            $table->decimal('amount',13,4)->default(0)->unsigned();
            $table->mediumText('description')->nullable();
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
        Schema::dropIfExists('water_bills');
    }
}
