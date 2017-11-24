<?php
/**
 * Created by PhpStorm.
 * User: novase
 * Date: 24/11/2017
 * Time: 12:04 μμ
 */

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExamCentersTable extends Migration
{

    public function up()
    {

        Schema::create('exam_centers', function (Blueprint $table) {

            $table->increments('id');
            $table->string('name');
            $table->string('tax_reg_number');
            $table->string('city');
            $table->string('department');
            $table->string('address');
            $table->string( 'fax');
            $table->string( 'phone');
            $table->timestamps();


        });

    }


    public function down()
    {
        Schema::dropIfExists('exam_centers');
    }

}