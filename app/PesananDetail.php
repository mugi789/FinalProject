<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pesanandetail extends Model
{
    public function Barang(){
        return $this->belongsTo('App\Barang','barang_id','id');
    }

    public function pesanan(){
        return $this->belongsTo('App\Pesanan','pesanan_id','id');
    }

    public function kategori(){
        return $this->belongsTo('App\kategori','kategori_id','id');
    }
}
