<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIndividualLoanRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('individual_loan_requests', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('customer_name');
            $table->date('date_of_birth');
            $table->string('phone_number');
            $table->string('email_address')->nullable();
            $table->boolean('isEmployed');
            $table->string('name_of_employer');
            $table->string('physical_address');
            $table->decimal('average_monthly_salary');
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
        Schema::dropIfExists('individual_loan_requests');
    }
}
