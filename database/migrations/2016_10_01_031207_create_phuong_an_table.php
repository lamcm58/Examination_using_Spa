<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhuongAnTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phuongan', function(Blueprint $table){
            $table->char('ma_phuong_an',5)->primary();
            $table->text('noi_dung');
            $table->tinyInteger('dung_sai');
            $table->char('ma_cau_hoi',5);
            $table->foreign('ma_cau_hoi')->references('ma_cau_hoi')->on('cauhoi')->onDelete('cascade');
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
