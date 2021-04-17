@extends('dasbor.dashboard')
@section('title', 'Tambah Postingan Barang')
@section('h1', 'Posting Barang')
@section('h3', 'Posting Barang')
@section('content')
<div class="card-header">
  <h3 class="card-title">Form Input Barang</h3>
</div>
        <div class="container">
          <form action="/dasbor" method="POST">
            @csrf
            <div class="form-group mt-4">
              <label for="nama">Nama Barang</label>
              <input type="text" class="form-control" id="nama" name="nama">
            </div>
            <div class="form-group">
              <label for="harga">Harga Barang</label>
              <input type="harga" class="form-control" id="harga" name="harga">
            </div>
            <div class="form-group">
              <label for="stok">Stok Barang</label>
              <input type="text" class="form-control" id="stok" name="stok">
            </div>
            <div class="form-group">
                <label for="keterangan">Keterangan</label>
                <textarea class="form-control" id="keterangan" rows="3" name="keterangan"></textarea>
              </div>
            <input type="submit" value="Submit" />
          </form>
        </div>
@endsection