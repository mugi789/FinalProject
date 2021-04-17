<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class barang extends Model
{
    public function kategori(){
        return $this->hasMany('App\Kategori','barang_id','id');
    }
    public function pesanan_detail(){
        return $this->hasMany('App\PesananDetail','barang_id','id');
    }
}
