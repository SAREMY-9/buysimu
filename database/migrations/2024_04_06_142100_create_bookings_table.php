<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->string('deviceModel');
            $table->string('serialNumber')->unique();
            $table->string('imeiNumber')->unique();
            $table->string('cashPrice');
            $table->string('deposit'); 
            $table->string('clientIdPassport')->unique();
            $table->string('amountFinanced');
            $table->string('insurancePremium');
            $table->string('weeklyPayment');
            $table->string('loanTenure');
            $table->string('totalAmountDue');
            $table->date('agreementDate');
            $table->string('status')->nullable()->default('Pending');
            $table->string('condition');
             $table->string('shopName');   
          //  $table->string('signature')->nullable(); // Store the signature as a text field
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};



