<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDonatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donats', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("user_id_token");
            $table->string("id_DA");
            $table->string("alert_type");
            $table->string("billing_system");
            $table->string("username");
            $table->string("amount");
            $table->string("amount_formatted");
            $table->string("amount_main");
            $table->string("currency");
            $table->string("message");
            $table->string("date_paid");
            $table->boolean("_is_test_alert");
            $table->boolean("status");
            $table->float("amount");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('donats');
    }
}
