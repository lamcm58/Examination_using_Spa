<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCauhoiTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cauhoi', function(Blueprint $table){
            $table->increments('id');
            $table->string('questions',255);
            $table->json('choices');
            $table->integer('monthi_id')->unsigned();
            $table->integer('dethi_id')->unsigned();
            $table->integer('correct');
            $table->foreign('monthi_id')->references('id')->on('monthi')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('dethi_id')->references('id')->on('dethi')->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cauhoi');
    }
}
