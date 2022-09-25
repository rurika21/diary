<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTargetsTable extends Migration
{
    
    public function up()
    {
        Schema::create('targets', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->softDeletes();
            $table->string('content', 100);
            $table->integer('user_id')->unsigned();
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('target');
    }
}
