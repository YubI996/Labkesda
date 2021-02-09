<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class parameter_transaksi extends Model
{
    protected $table = 'parameter_transaksi';
    protected $fillable = [
        'transaksi_id','parameter_id','hasil'];
}
