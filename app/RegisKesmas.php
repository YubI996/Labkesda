<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Regiskesmas extends Model
{
    protected $table = 'regis_kesmas';

    protected $guarded = [];

    public function parameter()
    {
        return $this->belongsToMany(Kmparameter::class,'kmparameter_regiskesmas','regiskesmas_id')
                    ->withPivot('hasil_pemeriksaan');
    }

    public function harga()
    {
        return $this->hasMany(Kmtransaksi::class);
    }
}
