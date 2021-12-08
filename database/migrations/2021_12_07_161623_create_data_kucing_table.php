<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataKucingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_kucing', function (Blueprint $table) {
            $table->id();
            $table->integer('id_kucing');
            $table->string('nama_kucing');
            $table->string('keterangan');
            $table->string('tanggal_masuk');
            $table->string('tgl_pelaksanaan');
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
        Schema::dropIfExists('data_kucing');
    }
}
