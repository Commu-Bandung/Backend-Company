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
                <div class="box-body flash-message" data-uk-alert>
                    <a href="" class="uk-alert-close uk-close"></a>
                    <p>{{  isset($successMessage) ? $successMessage : '' }}</p>
                     @if (count($errors) > 0)
                        <div class="alert alert-danger">
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
                    <h3 class="box-title">Tambah Kategori </h3>
                  </div><!-- /.box-header -->
                  <div class="box-body no-padding">
                      <form id="formKategoriTambah" class="form-horizontal" role="form" method="POST" action="{{ url('/kategorikerjasama/tambahkategori') }}">
                      <input type="hidden" name="_token" value="{{ csrf_token() }}">
                      
                      
                      <div class="form-group">
                          <label class="col-md-4 control-label">ID</label>
                          <div class="col-md-6 @if ($errors->has('id')) has-error @endif">
                              <input type="text" class="form-control" name="id" value="{{Request::old('id')}}">
                              <small class="help-block"></small>
                          </div> 
                      </div>
   
                      <div class="form-group">
                          <label class="col-md-4 control-label">Nama Kategori </label>
                          <div class="col-md-6  @if ($errors->has('kategori')) has-error @endif">
                              <input type="text" class="form-control" name="kategori" value="{{Request::old('kategori')}}">
                              <small class="help-block"></small>
                              <!-- @if ($errors->has('jurNama')) <small class="help-block">{{ $errors->first('jurNama') }}</small> @endif -->
                          </div>
                      </div>
   
                      
   
                      <div class="form-group">
                          <div class="col-md-6 col-md-offset-4">
                              <button type="submit" class="btn btn-primary" id="button-reg">
                                  Simpan
                              </button>

                              
                              <a href="{{{ action('KategoriKerjasama\KategoriKerjasamaController@index') }}}" title="Cancel">
                              <button type="button" class="btn btn-default" id="button-reg">
                                  Cancel
                              </button>
                              </a>  
                          </div>
                      </div>
                      </form>   
                  </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div>
          </div><!-- /.row (main row) -->
            
@endsection

