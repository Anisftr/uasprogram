@extends('layout.admin')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="logout">logout</a></li>
              <li class="breadcrumb-item active">keluar</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
               <h4> <marquee behavior="alternate" onmouseover="this.stop()" onmouseout="this.start()">WELCOME TO RENTAL MOBIL</h4></marquee>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="row">
                  <div class="col-md-10">
                      <table class="table m-0">
                        <thead>
                        <th><img src="{{ asset ('template/dist/img/png_20220118_103602_0000~2.png')}}" class="img-responsive" alt="image" width="980" height="500" ></th>
                        </thead>
                      </table>
                    
                    <!-- /.chart-responsive -->
                  </div>
                </div>
                <!-- /.row -->
              </div>

            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->

        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <div class="col-md-20">
            <div class="row">
              <div class="col-md-5">
              </div>
            </div>
            <!-- /.row -->

            <!-- TABLE: LATEST ORDERS -->
            <div class="card">
              <div class="card-header border-transparent">
                <h3 class="card-title">Latest Orders</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                  <table class="table m-0">
                    <thead>
                    <tr>
    
                      <th> <img src="{{ asset ('template/dist/img/20220118_105528_0000.png')}}" class="img-responsive" alt="image" width="200" height="100"></th>
                      <th> <img src="{{ asset ('template/dist/img/mobil-lcgc-jenisnya.png')}}" class="img-responsive" alt="image" width="200" height="100"></th>
                      <th> <img src="{{ asset ('template/dist/img/20220118_110313_0000.png')}}" class="img-responsive" alt="image" width="200" height="100"></th>
                      <th> <img src="{{ asset ('template/dist/img/AS_3.png')}}" class="img-responsive" alt="image" width="200" height="100"></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                      <td>SUV(Sport Utility Vehicle)</td>
                      <td>City Car</td>
                      <td>MPV</td>
                      <td>Double Cabin</td>
                      
                    </tr>
                    <tr>
                      <td>harga:500.000</td>
                      <td>harga:750.000</td>
                      <td>harga:800.000</td>
                      <td>harga:600.000</td>
                    </tr>
                    <tr>
                      <td><a href="/tambahtransaksi" class="btn btn-success">sewa sekarang </a></a></td>
                      <td><a href="/tambahtransaksi" class="btn btn-success">sewa sekarang </a></a></td>
                      <td><a href="/tambahtransaksi" class="btn btn-success">sewa sekarang </a></a></td>
                      <td><a href="/tambahtransaksi" class="btn btn-success">sewa sekarang </a></a></td>
                    </tr>
                    
                    </tbody>
                  </table>
                
                <!-- /.table-responsive -->
              </div>
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>
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
    
            </div>
    </div>  
  

@endsection