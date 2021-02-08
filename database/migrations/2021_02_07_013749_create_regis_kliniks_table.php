<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegisKliniksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('regis_kliniks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('no_regis')->unique();
            $table->string('nama');
            $table->date('tgll');
            $table->integer('usia');
            $table->enum('jenis_kelamin',['Laki-laki', 'Perempuan']);
            $table->string('alamat');
            $table->string('no_hp');
            $table->string('pengirim');
            $table->string('dokter');
            $table->string('jaminan');
            $table->date('tgl_regis');
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
        Schema::dropIfExists('regis_kliniks');
    }
}
