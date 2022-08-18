<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTable extends Migration
{
    protected $table = 'items';
    public function up()
    {
        
        
        Schema::create('items', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title', 50);
            $table->string('body', 200);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('items');
    }
}
