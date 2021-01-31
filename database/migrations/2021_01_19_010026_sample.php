<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Sample extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('km_sample', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('id_regis_kesmas');
            $table->integer('id_km_parameter_pemeriksaan');
            $table->string('hasil_pemeriksaan');
            $table->integer('total');
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
