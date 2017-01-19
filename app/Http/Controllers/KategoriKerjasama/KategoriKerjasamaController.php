<?php

namespace App\Http\Controllers\KategoriKerjasama;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Validator;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\KategoriKerjasama as KategoriKerjasama;

class KategoriKerjasamaController extends Controller
{
   public function __construct()
  {
    //$this->middleware('auth');
   // $this->middleware('auth:dosen');
  }
      /**
   * Display a listing of the resource.
   *
   * @return Response
	*/
      public function index()
      {
      	$data = array('kategorikerjasama' => KategoriKerjasama::all());

      	return view('adminlte::kategorikerjasama', $data);
      }

      public function tambah()
      {
      	return view('adminlte::tambahkategori');
      }

      public function tambahkategori(Request $request)
      {
      	$input = $request->all();
      	$pesan = array(
      		'id.required' => 'Id Kategori dibutuhkan.',
      		'id.unique' => 'Id Kategori sudah digunakan.',
      		'kategori.required' => 'Kategori Dibutuhkan.',
      		);

      	$aturan = array(
      		'id' => 'required|unique:kategorikerjasama',
      		'kategori' => 'required|max:250',
      		);

      	$validator = Validator::make($input,$aturan, $pesan);

      	if ($validator->fails()) {
      		# Back To Message dengan Error
      		return Redirect::back()->withErrors($validator)->withInput();

      		#If Success
      	}

      	$kategorikerjasama = new KategoriKerjasama;
      	$kategorikerjasama->id = $request['id'];
      	$kategorikerjasama->kategori = $input['kategori'];

      	if (! $kategorikerjasama->save())
      	App::abort(500); 

      return Redirect::action('KategoriKerjasama\KategoriKerjasamaController@index')
      				->with('successMessage','Data Kategori "'.$input['kategori'].'" telah berhasil diubah.'); 
      
      		
      	}

      		public function hapus($id)
      		{
      			$id = KategoriKerjasama::where('id','=',$id)->first();

      			if ($id==null)
      			app::abort(404);
      			$id->delete(); 
      			return Redirect::route('kategorikerjasama');

      		
      }
}
