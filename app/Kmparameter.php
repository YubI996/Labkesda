<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kmparameter extends Model
{
    protected $table = 'kmparameter';

    protected $guarded = [];

    public function regiskesmas()
    {
        $this->belongsToMany(Regiskesmas::class,'kmparameter_regiskesmas','kmparameterpemeriksaan_id')
             ->withPivot('hasil_pemeriksaan');
    }
}
