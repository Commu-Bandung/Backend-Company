@extends('adminlte::layouts.app')
@section('breadcrump')
          <h1>
            Dashboard
            <small>Control panel</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
            <li class="active">Kerjasama</li>
          </ol>
@stop
@section('content')
          <div class="row">
            <div class="col-md-6">
                <div class="uk-alert uk-alert-success" data-uk-alert>
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
                    <h3 class="box-title">Daftar Kerjasama <a class="btn btn-success btn-flat btn-sm" id="tambahKerjasama" title="Tambah"><i class="fa fa-plus"></i></a></h3>
                  </div><!-- /.box-header -->
                  <div class="box-body no-padding">
                    <table class="table table-condensed">
                      <tbody><tr>
                        <th style="width: 50px; text-align: center;">Kode </th>
                        <th>Nama Organisasi</th>
                        <th>Kategori Kerjasama</th>
                        <th>Nama Penerima</th>
                        <th>Jenis Kerjasama</th>
                        <th>Aksi</th>
                      </tr>
                      <?php foreach ($kerjasama as $datakerjasama):  ?>
                      <tr id="kerjasama-list" name="kerjasama-list">
                          <td style="text-align: center;">{{ $datakerjasama->id_kerjasama}}</td>
                          <td>{{ $datakerjasama->namaOrganisasi}}</td>
                          <td>{{ $datakerjasama->kodeKategori}}</td>
                          <td>{{ $datakerjasama->namaPenerima}}</td>
                          <td>{{ $datakerjasama->jenisKerjasama}}</td>
                          <td><a href="{{{ URL::to('kerjasama/'.$datakerjasama->id_kerjasama.'/edit') }}}">
                              <span class="label label-warning"><i class="fa fa-edit"> Edit </i></span>
                              </a> </td>
                          <td><a href="{{{ action('Kerjasama\KerjasamaController@hapus',[$datakerjasama->id_kerjasama]) }}}" title="hapus"   onclick="return confirm('Apakah anda yakin akan menghapus Kerjasama {{{($datakerjasama->id_kerjasama).' - '.$datakerjasama->namaOrganisasi.' - '.$datakerjasama->namaPenerima.' - '.$datakerjasama->jenisKerjasama }}}?')">
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

          <!-- Modal -->
          <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                  <div class="modal-content">
                      <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                          <h4 class="modal-title" id="myModalLabel">Kerjasama - Tambah</h4>
                      </div>
                      <div class="modal-body">
           
                          <form id="formKerjasama" class="form-horizontal" role="form" method="POST" action="{{ url('/kerjasama/tambah') }}">
                              <input type="hidden" name="_token" value="{{ csrf_token() }}">
           
                              <div class="form-group">
                                  <label class="col-md-4 control-label">Kode</label>
                                  <div class="col-md-6">
                                      <input type="text" class="form-control" name="id_kerjasama">
                                      <small class="help-block"></small>
                                  </div>
                              </div>
           
                              <div class="form-group">
                                  <label class="col-md-4 control-label">Nama Organisasi </label>
                                  <div class="col-md-6">
                                      <input type="text" class="form-control" name="namaOrganisasi">
                                      <small class="help-block"></small>
                                  </div>
                              </div>
           
                              <div class="form-group">
                                  <label class="col-md-4 control-label">Kategori Kerjasama</label>
                                  <div class="col-md-6 has-error">
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
                                      <input type="text" class="form-control" name="namaPenerima">
                                      <small class="help-block"></small>
                                  </div>
                              </div>


                               <div class="form-group">
                                  <label class="col-md-4 control-label">Jenis Kerjasama </label>
                                  <div class="col-md-6">
                                      <input type="text" class="form-control" name="jenisKerjasama">
                                      <small class="help-block"></small>
                                  </div>
                              </div>
           
                              <div class="form-group">
                                  <div class="col-md-6 col-md-offset-4">
                                      <button type="submit" class="btn btn-primary" id="button-reg">
                                          Simpan
                                      </button>
                                  </div>
                              </div>
                          </form>                       
           
                      </div>
                  </div>
              </div>
          </div>
          <!--end of Modal -->            
                 

@endsection
@section('script')
    <script>
 
    $(function(){


        $('#tambahKerjasama').click(function(){
            $('input+small').text('');
            $('input').parent().removeClass('has-error');
            $('select').parent().removeClass('has-error');

            $('#myModal').modal('show');
            //console.log('test');
            return false;
        });

       
        $(document).on('submit', '#formKerjasama', function(e) {  
            e.preventDefault();
             
            $('input+small').text('');
            $('input').parent().removeClass('has-error');           
             
            $.ajax({
                method: $(this).attr('method'),
                url: $(this).attr('action'),
                data: $(this).serialize(),
                dataType: "json"
            })
            .done(function(data) {
                console.log(data);
                
                $('.alert-success').removeClass('hidden');
                $('#myModal').modal('hide');
                
                window.location.href='/kerjasama'; 
            })
            .fail(function(data) {
                console.log(data.responeJSON);
                $.each(data.responseJSON, function (key, value) {
                    var input = '#formKerjasama input[name=' + key + ']';
                    
                    $(input + '+small').text(value);
                    $(input).parent().addClass('has-error');
                });
            });
        });
 
    })


 
    </script>
@endsection

