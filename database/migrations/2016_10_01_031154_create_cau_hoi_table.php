<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCauHoiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
    {
        Schema::create('cauhoi', function(Blueprint $table){
            $table->char('ma_cau_hoi',5)->primary();
            $table->char('ma_mon_hoc',5);
            $table->foreign('ma_mon_hoc')->references('ma_mon_hoc')->on('monhoc')->onDelete('cascade');
            $table->text('noi_dung');
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
