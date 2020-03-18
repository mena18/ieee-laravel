<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
	        $table->increments('id');
	        $table->string('name');
          $table->string('type')->default("mid_year");//mid year course  or summer course
          $table->string('code');// course code for example arduino is A
          $table->integer('year');
          $table->integer('open')->default(0);
          $table->longText('description')->nullable();
	        $table->integer('hours');
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
        Schema::dropIfExists('courses');
    }
}
