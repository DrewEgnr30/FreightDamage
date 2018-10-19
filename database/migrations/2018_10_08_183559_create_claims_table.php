<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClaimsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('claims', function (Blueprint $table) {
            $table->increments('id');
            $table->string('RMA')->nullable();
            $table->string('Owner')->nullable();
            $table->string('Origin_WH')->nullable();
            $table->string('Return_WH')->nullable();
            $table->string('Reason')->nullable();
            $table->string('Customer')->nullable();
            $table->string('PO')->nullable();
            $table->string('PN')->nullable();
            $table->string('Description')->nullable();
            $table->string('Orientation')->nullable();
            $table->string('Act_Cost')->nullable();
            $table->string('Class')->nullable();
            $table->string('SN')->nullable();
            $table->string('Carrier')->nullable();
            $table->string('PRO')->nullable();
            $table->string('Type')->nullable();
            $table->string('SF_Ref')->nullable();
            $table->string('Note')->nullable();
            $table->string('New_Order')->nullable();
            $table->string('Credit_Memo')->nullable();
            $table->string('SJA')->nullable();
            $table->string('SJA_Cost')->nullable();
            $table->string('Date_Complete')->nullable();
            $table->string('Int_Claim_Num')->nullable();
            $table->string('Amount_Filed')->nullable();
            $table->string('Amount_Paid')->nullable();
            $table->string('Claim_Status')->nullable();
            $table->string('Return_Order')->nullable();
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
        Schema::dropIfExists('claims');
    }
}
