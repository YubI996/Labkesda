<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RegisKesmas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('regis_kesmas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('no_regis');
            $table->string('nama');
            $table->string('alamat');
            $table->string('pengirim');
            $table->string('jenis_sample');
            $table->date('tgl_sampling');
            $table->date('tgl_penerima');
            $table->string('deskripsi_sample');
            $table->string('jenis_sample_cb');
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
        //
    }
}
