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
    public function edit($id){
        $barang = DB::table('barang')->where('id', $id)->first();
        return view('dasbor.edit',['barang' => $barang]);
    }
    public function update($id, Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'harga' => 'required',
            'stok' => 'required',
            'keterangan' => 'required'
        ]);

        $query = DB::table('barang')
            ->where('id', $id)
            ->update([
                'nama' => $request["nama"],
                'harga' => $request["harga"],
                'stok' => $request["stok"],
                'keterangan' => $request["keterangan"]
            ]);
        return redirect('/dasbor');
    }
    public function destroy($id) 
    {
    // menghapus data books berdasarkan id yang dipilih
    DB::table('barang') -> where('id', $id) -> delete();
    // Alihkan ke halaman books
    return redirect('/dasbor') -> with('status', 'Data Buku Berhasil DiHapus');
    }
}
