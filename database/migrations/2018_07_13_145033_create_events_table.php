<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('events', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('image');
            $table->string('location');
            $table->dateTime('date');
            $table->longText('description');
            $table->longText('arabic_description')->nullable();
            $table->mediumText('mission')->nullable();
            $table->mediumText('goals')->nullable();
            $table->mediumText('speakers')->nullable();
            $table->mediumText('speakers_images')->nullable();
            $table->string('event_type', 10);
            $table->boolean('event_open');
            $table->boolean('mega')->default('0');
            $table->string("mega_date")->nullable();
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
        Schema::dropIfExists('events');
    }
}
