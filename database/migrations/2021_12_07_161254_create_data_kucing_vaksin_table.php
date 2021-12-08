<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataKucingVaksinTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_kucing_vaksin', function (Blueprint $table) {
            $table->id();
            $table->integer('id_kucing');
            $table->integer('id_admin');
            $table->integer('id_vaksin');
            $table->string('nama_kucing');
            $table->integer('umur_kucing');
            $table->integer('berat_kucing');
            $table->string('tanggal_masuk');
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
        Schema::dropIfExists('data_kucing_vaksin');
    }
}
