@extends('adminlte::layouts.app')
@section('breadcrump')
          <h1>
            Dashboard
            <small>Control panel</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
            <li class="active">Edit Kerjasama</li>
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
                    <h3 class="box-title">Kerjasama - Edit</h3>
                  </div><!-- /.box-header -->
                  <div class="box-body no-padding">
                      <form id="formKerjasamaEdit" class="form-horizontal" role="form" method="POST" action="{{ url('/kerjasama/'.$id_kerjasama.'/simpanedit') }}">
                      <input type="hidden" name="_token" value="{{ csrf_token() }}">
                      <input type="hidden" name="_method" value="PUT">
                      <input type="hidden" name="id_kerjasama" value="{{$id_kerjasama}}" >
                      
                      <div class="form-group">
                          <label class="col-md-4 control-label">Kode</label>
                          <div class="col-md-6">
                              <input type="text" class="form-control" name="kerjasamaKodeShow" value="{{$id_kerjasama}}" disabled="true">
                              <small class="help-block"></small>
                          </div>
                      </div>
   
                      <div class="form-group">
                          <label class="col-md-4 control-label">Nama Organisasi </label>
                          <div class="col-md-6">
                              <input type="text" class="form-control" name="namaOrganisasi" value="{{$namaOrganisasi}}">
                              <small class="help-block"></small>
                          </div>
                      </div>
   
                       <div class="form-group">
                                  <label class="col-md-4 control-label">Kategori Kerjasama</label>
                                  <div class="col-md-6">
                                      <select class="form-control" name="kodeKategori">
                                          @foreach ($listkategorikerjasama as $itemkategorikerjasama)
                                          <option value="{{$itemkategorikerjasama->id}}">{{$itemkategorikerjasama->kategori}}</option>
                                          @endforeach
                                      </select>
                                      
                                      <small class="help-block"></small>
                                  </div>
                              </div>
                     

                       <div class="form-group">
                          <label class="col-md-4 control-label">Nama Penerima </label>
                          <div class="col-md-6">
                              <input type="text" class="form-control" name="namaPenerima" value="{{$namaPenerima}}">
                              <small class="help-block"></small>
                          </div>
                      </div>

                       <div class="form-group">
                          <label class="col-md-4 control-label">Jenis Kerjasama </label>
                          <div class="col-md-6">
                              <input type="text" class="form-control" name="jenisKerjasama" value="{{$jenisKerjasama}}">
                              <small class="help-block"></small>
                          </div>
                      </div>

   
                      <div class="form-group">
                          <div class="col-md-6 col-md-offset-4">
                              <button type="submit" class="btn btn-primary" id="button-reg">
                                  Simpan
                              </button>


                              <a href="{{{ action('Kerjasama\KerjasamaController@index') }}}" title="Cancel">
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


