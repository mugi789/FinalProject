<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Produk;

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
        // $query = DB::table('barang')->get();
        $barang = Produk::all();
        return view('dasbor.show', compact('barang'));
    }
    public function index(){
        return view('dasbor.post');
    }
    public function edit($id){
        $barang = Produk::all()->where('id', $id)->first();
        return view('dasbor.edit',['barang' => $barang]);
    }
    public function update($id, Request $request)
    {
        $request->validate([
            'nama' => 'required|unique:barang',
            'harga' => 'required',
            'stok' => 'required',
            'keterangan' => 'required'
        ]);

        $post = Produk::find($id);
        $post->nama = $request->nama;
        $post->harga = $request->harga;
        $post->stok = $request->stok;
        $post->keterangan = $request->keterangan;
        $post->update();
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
