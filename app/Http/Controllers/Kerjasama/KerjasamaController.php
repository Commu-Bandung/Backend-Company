<?php

namespace App\Http\Controllers\Kerjasama;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use Response;


use Validator;
//use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Kerjasama as Kerjasama;
use App\KategoriKerjasama as KategoriKerjasama;


class KerjasamaController extends Controller
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
      	$kategorikerjasama = KategoriKerjasama::orderBy('id')->get();
      	$data = array('kerjasama' => Kerjasama::all());

      	return view('adminlte::kerjasama', $data)
      	->with('listkategorikerjasama', $kategorikerjasama);
      }

      public function hapus($id)

     {
     	$id_kerjasama = Kerjasama::where('id_kerjasama', '=', $id)->first();

     	if($id_kerjasama == null)
     		app::abort(404);

     	$id_kerjasama->delete();
     	return Redirect::action('Kerjasama\KerjasamaController@index');
     }

     protected function validator(array $data)
    {
        $messages = [
            'id_kerjasama.required'    => 'Kode Kerjasama dibutuhkan.',
            'id_kerjasama.unique'      => 'Kode Kerjasama sudah digunakan.',
            'namaOrganisasi.required'    => 'Nama Organisasi dibutuhkan.',
            'kodeKategori.required' => 'Kita membutuhkan Kode Kategori .',
            'namaPenerima.required'    => 'Nama Penerima dibutuhkan.',
            'jenisKerjasama.required'    => 'Jenis Kerjasama dibutuhkan.',
        ];
        return Validator::make($data, [
            'id_kerjasama' => 'required|unique:kerjasama',
            'namaOrganisasi' => 'required|max:250',
            'kodeKategori' => 'required',
            'namaPenerima' => 'required|max:250',
            'jenisKerjasama' => 'required|max:250',
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

        $kerjasama = new Kerjasama();
        $kerjasama->id_kerjasama         = $data['id_kerjasama'];
        $kerjasama->kodeKategori  = $data['kodeKategori'];
        $kerjasama->namaOrganisasi         = $data['namaOrganisasi'];
         $kerjasama->namaPenerima         = $data['namaPenerima'];
         $kerjasama->jenisKerjasama         = $data['jenisKerjasama'];

        //melakukan save, jika gagal (return value false) lakukan harakiri
        //error kode 500 - internel server error
        if (! $kerjasama->save() )
          App::abort(500);
  }
 
  public function tambahkerjasama(Request $request)
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

      public function editkerjasama($id)
      {
      	$data = Kerjasama::find($id);
      	$kategorikerjasama = KategoriKerjasama::orderBy('id')->get();

      	return view('adminlte::editkerjasama', $data)
      	->with('listkategorikerjasama', $kategorikerjasama);
      }

      public function simpanedit($id)
      {
      	$input = Input::all();
      	$messages = [
      	'id_kerjasama.required'    => 'Kode Kerjasama dibutuhkan.',            
            'namaOrganisasi.required'    => 'Nama Organisasi dibutuhkan.',
            'kodeKategori.required' => 'Kita membutuhkan Kode Kategori .',
            'namaPenerima.required'    => 'Nama Penerima dibutuhkan.',
            'jenisKerjasama.required'    => 'Jenis Kerjasama dibutuhkan.',
        ];

        $validator = Validator::make($input, [
                          'id_kerjasama' => 'required',
                          'namaOrganisasi' => 'required|max:250',
                          'kodeKategori' => 'required',
                          'namaPenerima' => 'required|max:250',
                          'jenisKerjasama' => 'required|max:250',
                      ], $messages);

        if($validator->fails()) {
            # Kembali kehalaman yang sama dengan pesan error
            return Redirect::back()->withErrors($validator)->withInput();
          # Bila validasi sukses
        }

        $editKerjasama = Kerjasama::find($id);
        $editKerjasama->id_kerjasama = Input::get('id_kerjasama');
        $editKerjasama->namaOrganisasi = $input['namaOrganisasi'];
        $editKerjasama->kodeKategori = Input::get('kodeKategori');
        $editKerjasama->namaPenerima = $input['namaPenerima'];
        $editKerjasama->jenisKerjasama = $input['jenisKerjasama'];
        if (! $editKerjasama->save())
          App::abort(500);

        return Redirect::action('Kerjasama\KerjasamaController@index')
                          ->with('successMessage','Data Kerjasama "'.Input::get('namaOrganisasi').'" telah berhasil diubah.'); 
    }
}

      

 
