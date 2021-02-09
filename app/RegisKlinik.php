<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RegisKlinik extends Model
{
    protected $fillable = [
        'nama','jenis_kelamin','tgll','usia','alamat','no_hp','pengirim','dokter','jaminan','no_regis','tgl_regis'];
    public function transaksis()
    {
        return $this->hasMany(Transaksi::class);
    }
}
