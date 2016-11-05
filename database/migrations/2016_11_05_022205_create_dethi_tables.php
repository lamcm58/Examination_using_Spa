<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDethiTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dethi', function(Blueprint $table){
            $table->char('id_dethi',15)->primary();
            $table->string('ten_dethi',50);
            $table->integer('so_cauhoi');
            $table->char('id_monthi',15);
            $table->foreign('id_monthi')->references('id_monthi')->on('monthi')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('dethi');
    }
}
