<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCertificationTopicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('certification_topics', function (Blueprint $table) {

            $table->increments('id');
            $table->integer('certification_id')->unsigned();
            $table->integer('topic_id')->unsigned();
            $table->foreign('certification_id')->references('id')->on('certifications')->onDelete('cascade');
            $table->foreign('topic_id')->references('id')->on('topics')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('certification_topics');
    }
}
