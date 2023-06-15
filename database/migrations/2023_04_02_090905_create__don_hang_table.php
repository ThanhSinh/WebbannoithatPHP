<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDonHangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('DonHang', function (Blueprint $table) {
          
            $table->uuid('MaHoaDon',100)->primary();
            $table->dateTime('ngaydat');
    $table->integer('tongtien');
    $table->string('tinhtrang');
    $table->string('ghichu');
    $table->string('MaKH', 20);
    $table->timestamps();
    $table->foreign('MaKH')->references('MaKH')->on('KH');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('DonHang');
    }
}