<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->increments('id');
            $table->string("site_id")->nullable();
            $table->string("signature")->nullable();
            $table->string("amount")->nullable();
            $table->string("trans_id");
            $table->string("custom")->nullable();
            $table->string("currency")->nullable();
            $table->string("payid")->nullable();
            $table->string("payment_date")->nullable();
            $table->string("payment_time")->nullable();
            $table->string("error_message")->nullable();
            $table->string("payment_method")->nullable();
            $table->string("phone_prefixe")->nullable();
            $table->string("cel_phone_num")->nullable();
            $table->string("ipn_ack")->nullable();
            $table->string("created")->nullable();
            $table->string("updated")->nullable();
            $table->string("result")->nullable();
            $table->string("trans_status")->nullable();
            $table->string("designation")->nullable();
            $table->string("buyer_name")->nullable();
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
        Schema::dropIfExists('payments');
    }
}
