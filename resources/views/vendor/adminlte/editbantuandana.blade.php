@extends('adminlte::layouts.app')
@section('breadcrump')
          <h1>
            Dashboard
            <small>Control panel</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
            <li class="active">Edit Bantuan Dana</li>
          </ol>
@stop
@section('content')
          <div class="row">
            <div class="col-md-6">
                <div class="uk-alert uk-alert-success" data-uk-alert>
                    <a href="" class="uk-alert-close uk-close"></a>
                    <p>{{  isset($successMessage) ? $successMessage : '' }}</p>
                     @if (count($errors) > 0)
                        <div class="aler0t alert-danger">
                            <strong>Whoops!</strong> There were some problems with your input.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </div>
                <div class="box box-primary">
                  <div class="box-header">
                    <h3 class="box-title">Bantuan Dana - Edit</h3>
                  </div><!-- /.box-header -->
                  <div class="box-body no-padding">
                      <form id="formBantuanDanaEdit" class="form-horizontal" role="form" method="POST" action="{{ url('/bantuandana/'.$id_penerima.'/simpanedit') }}">
                      <input type="hidden" name="_token" value="{{ csrf_token() }}">
                      <input type="hidden" name="_method" value="PUT">
                      <input type="hidden" name="id_penerima" value="{{$id_penerima}}" >
                      
                      <div class="form-group">
                          <label class="col-md-4 control-label">Kode</label>
                          <div class="col-md-6">
                              <input type="text" class="form-control" name="bantuandanaKodeShow" value="{{$id_penerima}}" disabled="true">
                              <small class="help-block"></small>
                          </div>
                      </div>
   
                      <div class="form-group">
                          <label class="col-md-4 control-label">Nama Organisasi </label>
                          <div class="col-md-6">
                              <input type="text" class="form-control" name="nama_organisasi" value="{{$nama_organisasi}}">
                              <small class="help-block"></small>
                          </div>
                      </div>
   
                    
                     

                       <div class="form-group">
                          <label class="col-md-4 control-label">Nama Penerima </label>
                          <div class="col-md-6">
                              <input type="text" class="form-control" name="nama_penerima" value="{{$nama_penerima}}">
                              <small class="help-block"></small>
                          </div>
                      </div>

                       <div class="form-group">
                          <label class="col-md-4 control-label">Jumlah Dana </label>
                          <div class="col-md-6">
                              <input type="text" class="form-control" name="jumlah_dana" value="{{$jumlah_dana}}">
                              <small class="help-block"></small>
                          </div>
                      </div>

   
                      <div class="form-group">
                          <div class="col-md-6 col-md-offset-4">
                              <button type="submit" class="btn btn-primary" id="button-reg">
                                  Simpan
                              </button>


                              <a href="{{{ action('BantuanDana\BantuanDanaController@index') }}}" title="Cancel">
                              <span class="btn btn-default"><i class="fa fa-back"> Cancel </i></span>
                              </a>  
                          </div>
                      </div>
                      </form>   
                  </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div>
          </div><!-- /.row (main row) -->

          
                 

@endsection


