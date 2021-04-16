<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class DasborController extends Controller
{
    public function post(Request $request){
        $barang = DB::table('barang')->insert([
            "nama" => $request["nama"],
            "harga" => $request["harga"],
            "stok" => $request["stok"],
            "keterangan" => $request["keterangan"]
            ]);
        return redirect('/dasbor');
    }
    public function dasbor(){
        $query = DB::table('barang')->get();
        return view('dasbor.show', compact('query'));
    }
    public function posting(){
        return view('dasbor.post');
    }
}
