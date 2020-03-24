<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDoctorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctors', function (Blueprint $table){
        $table->increments('doctors_id');
          $table->string('last_name');
          $table->string('first_name');
          $table->string('profile_pic');
          $table->string('phone_no');
          $table->string('age');
          $table->string('address');
          $table->string('state');
          $table->string('docs_username');
          $table->string('docs_password');
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
        Schema::dropIfExists('doctors');
        
    }
}