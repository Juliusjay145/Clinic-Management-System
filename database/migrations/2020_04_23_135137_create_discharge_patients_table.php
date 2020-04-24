<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDischargePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients_discharge', function (Blueprint $table) {
            $table->increments('discharge_id');
            $table->integer('pat_discharge_id')->unsigned();
            $table->foreign('pat_discharge_id')->references('patients_id')->on('patients');
            //end of the line                      dri dapita gikan nis doctor na table
            // $table->integer('doctor_id')->unsigned();
            // $table->integer('patient_id')->unsigned();

            //ari pag add og datas
            $table->string('bed_days');
            $table->string('charges');
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
        Schema::dropIfExists('patients_discharge');
    }
}
