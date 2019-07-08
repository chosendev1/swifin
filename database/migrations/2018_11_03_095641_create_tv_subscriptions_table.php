<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTvSubscriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tv_subscriptions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('tv_type');
            $table->string('package_name')->nullable();
            $table->string('customer_account');
            $table->string('phone_number');
            $table->decimal('amount',13,4)->default(0)->unsigned();
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
        Schema::dropIfExists('tv_subscriptions');
    }
}
