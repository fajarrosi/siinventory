@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')

	@if($user->hasRole('admin'))

         <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="fa fa-users"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Users</span>
              <span class="info-box-number">{{$u}}</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>

        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="fa fa-sitemap"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Jurusan</span>
              <span class="info-box-number">{{$j}}</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        
	@elseif($user->hasRole('guru'))
       <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="fa fa-check-square"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Jumlah barang yang </br>sesuai standar</span>
              <span class="info-box-number">{{$sni}}</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>

        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="fa fa-exclamation-triangle"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Jumlah barang yang </br>tidak sesuai standar</span>
              <span class="info-box-number">{{$non}}</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>

         <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="fa fa-check-square"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Jumlah Pengajuan yang </br>sudah disetujui KPK</span>
              <span class="info-box-number">{{$kpk}}</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>

        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="fa fa-check-square"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Jumlah Pengajuan yang </br>sudah disetujui WKS</span>
              <span class="info-box-number">{{$wks}}</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>

  @elseif($user->hasRole('Ketua Prodi Kejuruan'))
         <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="fa fa-check-square"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Jumlah barang yang </br>sesuai standar</span>
              <span class="info-box-number">{{$sni}}</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>

        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="fa fa-exclamation-triangle"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Jumlah barang yang </br>tidak sesuai standar</span>
              <span class="info-box-number">{{$non}}</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>

         <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="fa fa-check-square"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Jumlah Pengajuan dari guru yang </br>belum disetujui</span>
              <span class="info-box-number">{{$blm}}</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>

        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="fa fa-check-square"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Jumlah Pengajuan yang </br>sudah disetujui WKS</span>
              <span class="info-box-number">{{$wks}}</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
  @elseif($user->hasRole('juru-bengkel'))
    
          <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="fa fa-cubes"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Jumlah barang yang </br>sudah dimasukkan kode inventaris</span>
              <span class="info-box-number">{{$item2}}</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>

        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-red"><i class="fa fa-cubes"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Jumlah barang yang </br>belum dimasukkan kode inventaris</span>
              <span class="info-box-number">{{$item1}}</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>

        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="fa fa-check-square"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Jumlah barang yang </br>sesuai standar</span>
              <span class="info-box-number">{{$sni}}</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>

        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="fa fa-exclamation-triangle"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Jumlah barang yang </br>tidak sesuai standar</span>
              <span class="info-box-number">{{$non}}</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>

      @else
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="fa fa-check-square"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Jumlah Pengajuan yang </br>Sudah disetujui</span>
              <span class="info-box-number">{{$data2}}</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>


        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="fa fa-exclamation-triangle"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Jumlah Pengajuan dari KPK yang </br>Belum disetujui</span>
              <span class="info-box-number">{{$data}}</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>


	@endif
@stop
@section('css')
<style type="text/css">
	img {
	  display: block;
	  margin-left: auto;
	  margin-right: auto;
	  width: 30%;
	}
</style>
@stop
