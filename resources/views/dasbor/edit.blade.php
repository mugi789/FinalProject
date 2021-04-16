@extends('dasbor.dashboard')
@section('title', 'Edit Postingan Barang')
@section('h1', 'Edit Posting Barang')
@section('h3', 'Edit Posting Barang')
@section('content')
<div class="card-header">
  <h3 class="card-title">Form Input Barang</h3>
</div>
        <div class="container">
          <form action="/dasbor/update/{{ $barang->id }}" method="post">
            @csrf
            @method('PUT')
            <div class="form-group mt-4">
              <label for="nama">Nama Barang</label>
              <input type="text" class="form-control" name="nama" value="{{ $barang->nama }}">
            </div>
            <div class="form-group">
              <label for="harga">Harga Barang</label>
              <input type="harga" class="form-control" name="harga" value="{{ $barang->harga }}">
            </div>
            <div class="form-group">
              <label for="stok">Stok Barang</label>
              <input type="text" class="form-control" name="stok" value="{{ $barang->stok }}">
            </div>
            <div class="form-group">
                <label for="keterangan">Keterangan</label>
                <textarea class="form-control" rows="3" name="keterangan">{{ $barang->keterangan }}</textarea>
              </div>
            <input type="submit" barang="Submit" />
          </form>
        </div>
@endsection