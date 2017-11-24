<?php
/**
 * Created by PhpStorm.
 * User: novase
 * Date: 24/11/2017
 * Time: 12:17 μμ
 */

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCertificationsTable extends Migration
{
    function up()
    {
        Schema::create('certifications', function (Blueprint $table) {

            $table->increments('id');
            $table->string('title');
            $table->string('code');
            $table->string('description');
            $table->string('notes');
            $table->timestamps();

        });
    }

    function down()
    {
        Schema::dropIfExists('certifications');
    }
}