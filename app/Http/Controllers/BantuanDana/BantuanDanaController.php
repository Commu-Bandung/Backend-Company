<?php

namespace App\Http\Controllers\BantuanDana;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use Response;


use Validator;
//use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\BantuanDana as BantuanDana;

class BantuanDanaController extends Controller
{
       
       public function __construct()
  {
    $this->middleware('auth');
  }
      /**
   * Display a listing of the resource.
   *
   * @return Response
   */

      public function index()
      {
      	$data = array('bantuandana' => BantuanDana::all());

      	return view('adminlte::bantuandana', $data);

      }

      public function hapus($id)
      {
     	$id_penerima = BantuanDana::where('id_penerima', '=', $id)->first();

     	if($id_penerima == null)
     		app::abort(404);

     	$id_penerima->delete();
     	return Redirect::action('BantuanDana\BantuanDanaController@index');
     }
      protected function validator(array $data)
    {
        $messages = [
            'id_penerima.required'    => 'Kode Penerima dibutuhkan.',
            'id_penerima.unique'      => 'Kode Penerima sudah digunakan.',
            'nama_organisasi.required'    => 'Nama Organisasi dibutuhkan.',
            'nama_penerima.required'    => 'Nama Penerima dibutuhkan.',
            'jumlah_dana.required'    => 'Jumlah Dana dibutuhkan.',
        ];
        return Validator::make($data, [
            'id_penerima' => 'required|unique:bantuandana',
            'nama_organisasi' => 'required|max:250',
            'nama_penerima' => 'required|max:250',
            'jumlah_dana' => 'required|max:250',
        ], $messages);
  }
   /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
  protected function tambah(array $data)
  {

        $bantuandana = new BantuanDana();
        $bantuandana->id_penerima         = $data['id_penerima'];
        $bantuandana->nama_organisasi         = $data['nama_organisasi'];
         $bantuandana->nama_penerima         = $data['nama_penerima'];
         $bantuandana->jumlah_dana         = $data['jumlah_dana'];

        //melakukan save, jika gagal (return value false) lakukan harakiri
        //error kode 500 - internel server error
        if (! $bantuandana->save() )
          App::abort(500);
  }

  public function tambahbantuandana(Request $request)
    {
        $validator = $this->validator($request->all());
 
        if ($validator->fails()) {
            $this->throwValidationException(
                $request, $validator
            );
            //return Response::json( array('errors' => $validator->errors()->toArray()),422);
        }

         $this->tambah($request->all());
 
        return response()->json($request->all(),200);
        }

      public function editbantuandana($id)
      {
      	$data =BantuanDana::find($id);
      	return view('adminlte::editbantuandana', $data);
      }

      public function simpanedit($id)
      {
      	$input = Input::all();
      	$messages = [
      	'id_penerima.required'    => 'Kode Penerima dibutuhkan.',            
            'nama_organisasi.required'    => 'Nama Organisasi dibutuhkan.',
            'nama_penerima.required'    => 'Nama Penerima dibutuhkan.',
            'jumlah_dana.required'    => 'Jumlah Dana dibutuhkan.',
        ];

        $validator = Validator::make($input, [
                          'id_penerima' => 'required',
                          'nama_organisasi' => 'required|max:250',
                          'nama_penerima' => 'required|max:250',
                          'jumlah_dana' => 'required|max:250',
                      ], $messages);

        if($validator->fails()) {
            # Kembali kehalaman yang sama dengan pesan error
            return Redirect::back()->withErrors($validator)->withInput();
          # Bila validasi sukses
        }

        $editBantuanDana = BantuanDana::find($id);
        $editBantuanDana->id_penerima = Input::get('id_penerima');
        $editBantuanDana->nama_organisasi = $input['nama_organisasi'];
        $editBantuanDana->nama_penerima = $input['nama_penerima'];
        $editBantuanDana->jumlah_dana = $input['jumlah_dana'];
        if (! $editBantuanDana->save())
          App::abort(500);

        return Redirect::action('BantuanDana\BantuanDanaController@index')
                          ->with('successMessage','Data Bantuan Dana "'.Input::get('nama_organisasi').'" telah berhasil diubah.'); 
    }
}

      

 
