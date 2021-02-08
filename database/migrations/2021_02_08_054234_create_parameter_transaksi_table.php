<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParameterTransaksisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parameter_transaksi', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('transaksi_id')->unsigned();
            $table->foreign('transaksi_id')
                ->references('id')->on('transaksis')
                ->onDelete('cascade');
            $table->bigInteger('parameter_id')->unsigned();
            $table->foreign('parameter_id')
                ->references('id')->on('parameters')
                ->onDelete('cascade');
            $table->string('hasil');
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
        Schema::dropIfExists('parameter_transaksi');
    }
}
