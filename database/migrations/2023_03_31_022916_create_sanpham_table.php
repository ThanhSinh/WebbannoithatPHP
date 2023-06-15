<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSanphamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sanpham', function (Blueprint $table) {
            $table->string('MaSP', 20)->primary();
    $table->string('hang');
    $table->string('tensp');
    $table->string('mota');
    $table->integer('sl');
    $table->integer('gia');
    $table->string('image')->nullable();
    $table->string('image1')->nullable();
    $table->string('image2')->nullable();
    $table->string('image3d')->nullable();
    $table->string('MaLSP', 20);
    $table->timestamps();
    $table->foreign('MaLSP')->references('MaLSP')->on('loaisanpham');
        });
    }

    
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sanpham');
    }
}
