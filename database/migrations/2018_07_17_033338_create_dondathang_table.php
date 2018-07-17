<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDondathangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('don_dat_hang', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('madh');
            $table->timestamps();
            $table->integer('idloaispcha');
            $table->integer('trangthaidh')->default(1)->comment('0: Đã xử lý, 1: Đang xử lý, 2: Đang giao hàng');
            $table->string('dcgiaohang');
            $table->date('ngaydat');
            $table->date('ngaygiao');
            $table->string('ghichu')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('don_dat_hang');
    }
}
