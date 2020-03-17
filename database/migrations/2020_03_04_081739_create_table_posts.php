<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePosts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table){
          $table->increments('id');
          $table->integer('customer_id')->unsigned();
            $table->foreign('customer_id')->references('id')->on('posts');
          $table->string('symptoms');
          $table->string('firstname');
          $table->string('lastname');
          $table->string('profilepic');
          $table->string('gender');
          $table->string('bloodtype');
          $table->string('birthday');
          $table->string('age');
          $table->string('addr');
          $table->string('contactnum');
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
        Schema::dropIfExists('posts');
    }
}