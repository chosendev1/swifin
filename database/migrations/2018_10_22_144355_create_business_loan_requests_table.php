<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBusinessLoanRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('business_loan_requests', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('business_name');
            $table->text('business_type');
            $table->date('date_of_registration');
            $table->string('phone_number');
            $table->string('email_address')->nullable();
            $table->string('business_location');
            $table->decimal('average_monthly_turnover');
            $table->decimal('amount_requested',13,4)->default(0)->unsigned();
            $table->text('loan_purpose');
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
        Schema::dropIfExists('business_loan_requests');
    }
}
