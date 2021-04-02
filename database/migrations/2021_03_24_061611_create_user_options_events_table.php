<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserOptionsEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_options_events', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->timestamps();
            $table->text("token")->nullable();
            $table->text("text")->nullable();
            $table->boolean("status")->default(0);
            $table->integer("amount")->nullable();
            $table->integer("type")->nullable();
            $table->integer("impact_time")->default(0);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_options_events');
    }
}
