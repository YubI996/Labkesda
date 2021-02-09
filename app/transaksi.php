<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class transaksi extends Model
{
    // protected $guided
    protected $fillable = [
        'regis_klinik_id','total','status_bayar'];
    // public function comments()
    // {
    //     return $this->hasMany(Comment::class);
    // }
}
