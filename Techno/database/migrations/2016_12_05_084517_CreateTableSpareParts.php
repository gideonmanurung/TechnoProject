<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableSpareParts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('sparepart', function (Blueprint $table) {
          $table->increments('id')->unique();
          $table->string('jenis');
          $table->string('namaProduk');
          $table->string('stok');
          $table->string('description');
          $table->string('harga');
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
        Schema::drop('layanan');
    }
}
