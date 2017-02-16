<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableFuel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('fuel', function (Blueprint $table) {
          $table->increments('idPemesanan')->unique();
          $table->string('email');
          $table->string('jumlah');
          $table->string('alamat');
          $table->string('kategori');
          $table->string('totalHarga');
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
      Schema::drop('fuel');
    }
}
