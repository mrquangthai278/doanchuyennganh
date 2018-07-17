<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSanphamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('san_pham', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('masp');
            $table->timestamps();
            $table->string('tensp')->nullable();
            $table->float('giasp')->nullable();
            $table->string('anhsp')->nullable();
            $table->string('thongtinsp')->nullable();
            $table->integer('soluongsp')->default(1)->comment('Số lượng tồn kho');
            $table->integer('maloaisp');
            $table->integer('math');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('san_pham');
    }
}
