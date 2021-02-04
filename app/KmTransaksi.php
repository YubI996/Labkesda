<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kmtransaksi extends Model
{
    protected $table = 'kmtransaksi';

    protected $guarded = [];

    public function regiskesmas()
    {
        return $this->belongsTo(Regiskesmas::class);
    }
}
