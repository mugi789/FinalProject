<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    protected $table = "barang";
    protected $fillable = ['nama', 'harga', 'stok', 'keterangan'];
}
