<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('schedules', function (Blueprint $table) {
            $table->increments('schedules_id');
            //dri dapita nagrefer cya sa id sa table na posts iyang gi rename na post_id
            $table->bigInteger('doctors_schedule_id')->unsigned();
            $table->foreign('doctors_schedule_id')->references('id')->on('users');
            //end of the line

            // $table->integer('doctor_id')->unsigned();
            // $table->integer('patient_id')->unsigned();

            //ari pag add og datas
            $table->string('name');
            $table->string('task_description');
            $table->date('task_date');
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

       // Schema::create('schedules', function (Blueprint $table) {
       //      $table->increments('id');
       //      //dri dapita nagrefer cya sa id sa table na posts iyang gi rename na post_id
       //      $table->integer('schedule_id')->unsigned();
       //      //end of the line

       //      //ari pag add og datas
       //      $table->string('sched_name');

       //      $table->date('start_date');
       //      $table->date('end_date');
       //      $table->timestamps();
       //      $table->softDeletes();
       //      // ari na tawgon ang FK na gerename og post_id sa id sa table na posts
       //      $table->foreign('schedule_id')->references('id')->on('users');
       //      // end of the line
       //  });
    

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('schedules');
    }
}
