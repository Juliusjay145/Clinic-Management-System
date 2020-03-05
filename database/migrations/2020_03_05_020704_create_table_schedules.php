<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableSchedules extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schedules', function (Blueprint $table) {
            $table->increments('id');
            //dri dapita nagrefer cya sa id sa table na posts iyang gi rename na post_id
            $table->integer('post_id')->unsigned();
            //end of the line

            //ari pag add og datas
            $table->string('sched_name');

            $table->date('start_date');
            $table->date('end_date');
            $table->timestamps();
            $table->softDeletes();
            // ari na tawgon ang FK na gerename og post_id sa id sa table na posts
            $table->foreign('post_id')->references('id')->on('posts');
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
        Schema::dropIfExists('schedules');
    }
}
