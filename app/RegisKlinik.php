<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RegisKlinik extends Model
{
    
    public function transaksis()
    {
        return $this->hasMany(Transaksi::class);
    }
}
