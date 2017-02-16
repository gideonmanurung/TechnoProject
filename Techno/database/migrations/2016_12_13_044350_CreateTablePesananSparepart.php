<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePesananSparepart extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('pesanansparepart', function (Blueprint $table) {
          $table->increments('idPemesanan')->unique();
          $table->string('emailPemesan');
          $table->string('idSparepart');
          $table->string('jumlah');
          $table->string('alamatPengiriman');
          $table->rememberToken();
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
      Schema::drop('pesanansparepart');
    }
}
