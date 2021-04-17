<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kategori extends Model
{
    public function barang(){
        return $this->belongsTo('App\Barang','barang_id','id');
    }
    public function pesanan_detail(){
        return $this->hasMany('App\PesananDetail','kategori_id','id');
    }
}
