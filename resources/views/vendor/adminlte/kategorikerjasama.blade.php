@extends('adminlte::layouts.app')
@section('breadcrump')
          <h1>
            Dashboard
            <small>Control panel</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
            <li class="active">Kategori</li>
          </ol>
@stop
@section('content')
          <div class="row">
            <div class="col-md-6">
                <div class="box box-primary">
                  <div class="box-header">
                    <h3 class="box-title">Kategori Kerjasama <a href="{{{ action('KategoriKerjasama\KategoriKerjasamaController@tambah') }}}" class="btn btn-success btn-flat btn-sm" data-toggle="modal" title="Tambah"><i class="fa fa-plus"></i></a></h3>
                  </div><!-- /.box-header -->
                  <div class="box-body no-padding">
                    <table class="table table-condensed">
                      <tbody><tr>
                        <th style="width: 50px; text-align: center;">Kode </th>
                        <th>Kategori Kerjasama</th>
                        <th>Aksi</th>
                      </tr>
                      <?php foreach ($kategorikerjasama as $datakategorikerjasama):  ?>
                      <tr>
                          <td style="text-align: center;">{{ $datakategorikerjasama->id}}</td>
                          <td>{{ $datakategorikerjasama->kategori}}</td>
                          <td><a href="{{{ action('KategoriKerjasama\KategoriKerjasamaController@hapus',[$datakategorikerjasama->id]) }}}" title="hapus" onclick="return confirm('Apakah anda yakin akan menghapus Jurusan {{{$datakategorikerjasama->id .' - '.$datakategorikerjasama->kategori }}}?')">
                            <span class="label label-danger"><i class="fa fa-trash"> Delete </i></span>
                            </a>
                          
                          </td>                        
                      </tr>
                      <?php endforeach  ?>  
                      </tbody>
                    </table>
                  </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div>
          </div><!-- /.row (main row) -->
            
@endsection


