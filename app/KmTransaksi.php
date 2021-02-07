<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kmtransaksi extends Model
{
    protected $table = 'km_transaksi';

    protected $guarded = [];

    public function regiskesmas()
    {
        return $this->belongsTo(Regiskesmas::class);
    }
}
