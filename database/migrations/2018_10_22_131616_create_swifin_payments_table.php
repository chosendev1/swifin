<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSwifinPaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('swifin_payments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->json('payment_transaction_data');
           /* $table->string('sender_name');
            $table->string('receiver_phone_number');
            $table->decimal('amount',13,4)->default(0)->unsigned();
            $table->mediumText('description')->nullable();*/
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
        Schema::dropIfExists('swifin_payments');
    }
}
