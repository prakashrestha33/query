<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Reply extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
    {
        Schema::create('reply_models', function (Blueprint $table) {
            $table->increments('id');
            // $table->renameColumn('id', 'reply_models_id');
            $table->text('comment');
            $table->string('created_by');
            $table->integer('query_id')->unsigned();
            $table->timestamps();
            $table->foreign('query_id')->references('id')->on('queries');
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reply_models');
    }
}
