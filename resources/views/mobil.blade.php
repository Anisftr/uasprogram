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
  <a href="/tambahmobil" class="btn btn-success">Tambah +</a>
  <div class="row">
    @if ($message = Session::get('succes'))
    <div class="alert alert-success" role="alert">
      {{ $message}}
   </div>
    @endif
      <table class="table" border=1>
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">No Plat</th>
              <th scope="col">Jenis mobil</th>
              <th scope="col">tahun pembuatan</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody>
    
            @foreach ($mb as $row)
             <tr>
                <th scope="row">{{ $row->id }}</th>
                <td>{{ $row->no_plat }}</td>
                <td>{{ $row->jenis_mobil }}</td>
                <td>{{ $row->tahun_pembuatan }}</td>
                
                <td>
                    <a href="/tampilkanmobil/{{ $row->id }}"  class="btn btn-info">Update</a>
                </td>
              </tr>
            @endforeach
  
            </tbody>
        </table>
      </div>
    </div>
  </div>

@endsection
  