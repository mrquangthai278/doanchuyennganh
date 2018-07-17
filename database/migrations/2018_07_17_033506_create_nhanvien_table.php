<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNhanvienTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nhan_vien', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('manv');
            $table->timestamps();
            $table->string('tennv');
            $table->string('tendangnhap');
            $table->string('matkhau');
            $table->string('diachi')->nullable();;
            $table->date('ngaysinh');
            $table->string('sodienthoai');
            $table->integer('gioitinh')->default(0)->comment('0: Nam, 1: Nữ,3: Khác');
            $table->integer('maloainv');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nhan_vien');
    }
}
