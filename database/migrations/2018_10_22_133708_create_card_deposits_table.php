<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCardDepositsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('card_deposits', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('sender_name');
            $table->string('sender_email_address');
            $table->string('sender_phone_number');
            $table->text('sender_physical_address');
            $table->string('sender_country');
            $table->string('sender_city');
            $table->text('receiver_name');
            $table->string('receiver_phone_number');
            $table->string('sender_card_name');
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
        Schema::dropIfExists('card_deposits');
    }
}
