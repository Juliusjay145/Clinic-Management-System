<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePrescriptions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient_prescriptions', function (Blueprint $table) {
            $table->increments('prescription_id');
            //dri dapita nagrefer cya sa id sa table na posts iyang gi rename na post_id
            $table->integer('pat_pres_id')->unsigned();
            $table->foreign('pat_pres_id')->references('patients_id')->on('patients');
            //end of the line                      dri dapita gikan nis doctor na table
            // $table->integer('doctor_id')->unsigned();
            // $table->integer('patient_id')->unsigned();

            //ari pag add og datas
            $table->string('prescriptions');
            $table->string('profilepic');
            $table->string('usage');
            $table->string('quantity');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('patient_prescriptions');
    }
}
