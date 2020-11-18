<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('deals');
            $table->integer('requested_user_id');
            $table->integer('service_user_id');
            $table->dateTime('requested_time', 0);
            $table->dateTime('avail_start_time', 0);
            $table->dateTime('avail_end_time', 0);
            $table->char('status',3);
            $table->dateTime('checkin_time', 0);
            $table->dateTime('payment_time', 0);
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
        Schema::dropIfExists('users');
    }
}
