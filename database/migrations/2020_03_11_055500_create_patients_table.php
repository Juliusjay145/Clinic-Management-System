<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     * 
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->increments('patients_id');
            //dri dapita nagrefer cya sa id sa table na posts iyang gi rename na post_id
            $table->bigInteger('doctors_id')->unsigned();
            $table->foreign('doctors_id')->references('id')->on('users');
            //end of the line                      dri dapita gikan nis doctor na table
            // $table->integer('doctor_id')->unsigned();
            // $table->integer('patient_id')->unsigned();

            //ari pag add og datas
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
            $table->softDeletes();
            // ari na tawgon ang FK na gerename og post_id sa id sa table na posts

            // $table->foreign('doctor_id')
            //     ->references('id')
            //     ->on('doctors');

            // $table->foreign('patient_id')
            //     ->references('id')
            //     ->on('patients');

            // end of the line
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('patients');
    }
}
