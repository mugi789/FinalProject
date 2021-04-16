@extends('dasbor.dashboard')
@section('content')
<div class="card-header">
    <h3 class="card-title">Daftar Barang</h3>
  </div>
  <!-- /.card-header -->
  <div class="card-body">
    <table class="table table-bordered">
      <thead>
        <tr>
          <th style="width: 10px">No</th>
          <th>Nama Barang</th>
          <th>Harga</th>
          <th>Stok</th>
          <th>Keterangan</th>
        </tr>
      </thead>
      @foreach ($query as $key => $value)
      <tbody>
        <tr>
            <td>{{ $key + 1 }}</td>
          <td>{{ $value->nama }}</td>
          <td>
            Rp.{{ $value->harga }};
          </td>
          <td>{{ $value->stok }} pcs</td>
          <td>{{ $value->keterangan }}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection