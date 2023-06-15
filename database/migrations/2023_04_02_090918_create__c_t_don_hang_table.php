<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCTDonHangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('CTDonHang', function (Blueprint $table) {
           
            $table->uuid('MaCTHoaDon',20)->primary();
    $table->integer('soluong');
   
    $table->string('MaSP', 100);
    $table->string('MaHoaDon', 100);
    $table->timestamps();
    $table->foreign('MaSP')->references('MaSP')->on('sanpham');
    $table->foreign('MaHoaDon')->references('MaHoaDon')->on('DonHang');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('CTDonHang');
    }
}
