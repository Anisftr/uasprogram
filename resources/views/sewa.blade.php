@extends('layout.admin')

@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Dashboard v2</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Dashboard </li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
    <div class="container">
  <a href="/inputsewa" class="btn btn-success">Tambah +</a>
    <div class="row">
        @if ($message = Session::get('succes'))
        <div class="alert alert-success" role="alert">
        {{ $message}}
    </div>
        @endif
        <table class="table" border=1>
            <thead>
                <tr>
                <th scope="col">id_pelanggan</th>
                <th scope="col">id_mobil</th>
                <th scope="col">id_pelanggan </th>
                <th scope="col">tgl_sewa</th>
                <th scope="col">tgl_kembali</th>
                <th scope="col"> harga</th>
                <th scope="col"> total</th>
                <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
        
                @foreach ($sw as $row)
                <tr>
                    <th scope="row">{{ $row->id }}</th>
                    <td>{{ $row->id_mobil }}</td>
                    <td>{{ $row->id_pelanggan }}</td>
                    <td>{{ $row->tgl_sewa }}</td>
                    <td>{{ $row->tgl_kembali }}</td>
                    <td>{{ $row->harga }}</td>
                    <td>{{ $row->total }}</td>
                    <td>
                        <a href="/tampilkansewa/{{ $row->id }}"  class="btn btn-info">Update</a>
                    </td>
                </tr>
                @endforeach
    
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
  