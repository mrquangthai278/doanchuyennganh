<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChitietspkmTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chi_tiet_spkm', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('masp');
            $table->integer('ngaybatdaukm');
            $table->string('ngaykethuckm');
            $table->integer('phantramkm');
            $table->integer('maloaikm');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chi_tiet_spkm');
    }
}
