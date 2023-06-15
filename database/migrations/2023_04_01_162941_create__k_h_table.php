<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKHTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('KH', function (Blueprint $table) {
            $table->string('MaKH', 20)->primary();
    $table->string('HoTen');
    $table->integer('SDT');
    $table->string('tk');
    $table->string('mk');
    $table->string('diachi');
    $table->string('GioTinh');
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
        Schema::dropIfExists('KH');
    }
}
