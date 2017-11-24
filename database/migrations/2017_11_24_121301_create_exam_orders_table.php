<?php
/**
 * Created by PhpStorm.
 * User: novase
 * Date: 24/11/2017
 * Time: 12:13 μμ
 */

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;


class CreateExamOrdersTable extends Migration
{

    function up()
    {
        Schema::create('exam_orders', function (Blueprint $table) {

            $table->increments('id');
            $table->integer('exam_center_id')->unsigned();
            $table->string('code');
            $table->integer('certification_id')->unsigned();
            $table->integer('topic_id')->unsigned();
            $table->timestamp('date_from')->nullable();
            $table->timestamp('date_to')->nullable();
            $table->string('department');
            $table->string('address');
            $table->string( 'fax');
            $table->string( 'phone');
            $table->timestamps();
            $table->foreign('exam_center_id')->references('id')->on('exam_centers')->onDelete('cascade');
            $table->foreign('certification_id')->references('id')->on('certifications')->onDelete('cascade');
            $table->foreign('topic_id')->references('id')->on('topics')->onDelete('cascade');;
        });
    }


    function down()
    {
        Schema::dropIfExists('exam_orders');
    }
}