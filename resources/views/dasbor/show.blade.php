@extends('dasbor.dashboard')
@section('title', 'Admin Dashboard')
@section('content')
<div class="card-header">
    <h3 class="card-title">Daftar Barang</h3>
  </div>
  <!-- /.card-header -->
  <div class="card-body">
    <table class="table table-bordered">
      <thead>
        <tr class="text-center">
          <th style="width: 10px">No</th>
          <th>Nama Barang</th>
          <th>Harga</th>
          <th>Stok</th>
          <th>Keterangan</th>
          <th>Aksi</th>
        </tr>
      </thead>
      @foreach ($query as $key => $value)
      <tbody>
        <tr>
            <td class="text-center">{{ $key + 1 }}</td>
          <td>{{ $value->nama }}</td>
          <td>
            Rp.{{ $value->harga }};
          </td>
          <td>{{ $value->stok }} pcs</td>
          <td>{{ $value->keterangan }}</td>
          <td class="text-center"><a href="/dasbor/edit/{{ $value->id }}" class="btn btn-sm btn-info">Edit</a> <a href="/dasbor/destroy/{{$value->id}}" class="btn btn-sm btn-danger" onclick="return confirm('yakin?');" >Delete</a></td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection