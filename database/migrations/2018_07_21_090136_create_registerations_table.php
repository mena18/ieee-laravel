<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegisterationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registerations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email');
            $table->string('mobile',16);
            $table->string('national_id',14);
            $table->string('university');
            $table->string('a_status');
            $table->string('ieee_member');
            $table->integer('membershipId');
            $table->string('code',4);
            $table->dateTime('date');
            $table->integer('event_id')->references('id')->on('Mega')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('registerations');
    }
}
