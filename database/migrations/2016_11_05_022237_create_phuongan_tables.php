<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhuonganTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phuongan', function(Blueprint $table){
            $table->char('id_phuongan',15)->primary();
            $table->longText('noi_dung_phuongan');
            $table->tinyInteger('dung_sai');
            $table->char('id_cauhoi',15);
            $table->foreign('id_cauhoi')->references('id_cauhoi')->on('cauhoi')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('phuongan');
    }
}
