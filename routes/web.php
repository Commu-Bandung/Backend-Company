<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => 'auth'], function () {
    //    Route::get('/link1', function ()    {
//        // Uses Auth Middleware
//    });

    //Please do not remove this if you want adminlte:route and adminlte:link commands to works correctly.
    #adminlte_routes
});

Route::group(['middleware' => 'web'], function () {
    Route::auth();
    Route::get('/home', 'HomeController@index');
});

Route::get('auth/{provider}', 'Auth\RegisterController@redirectToProvider');
Route::get('auth/{provider}/callback', 'Auth\RegisterController@handleProviderCallback');


Route::group(['middleware' => 'web'], function () {
 Route::auth();
//KategoriKerjasama
	Route::get('/kategorikerjasama',array(
		'as'=>'kategorikerjasama', 
		'uses'=> 'KategoriKerjasama\KategoriKerjasamaController@index'
	));

//add kategori
Route::get('/kategorikerjasama/tambah', array(
	'as'=>'kategorikerjasama.tambah',
	'uses'=>'KategoriKerjasama\KategoriKerjasamaController@tambah'
	));

Route::post('/kategorikerjasama/tambahkategori', array(
	'as' =>'kategorikerjasama.tambah.simpan',
	'uses' => 'KategoriKerjasama\KategoriKerjasamaController@tambahkategori'));

//delete kategori
Route::get('/kategorikerjasama/{id}/hapus', array(
	'as'=>'kategorikerjasama.hapus',
	'uses'=> 'KategoriKerjasama\KategoriKerjasamaController@hapus'
	));

    //kerjasama
	Route::get('/kerjasama',array('as'=>'kerjasama', 'uses'=> 'Kerjasama\KerjasamaController@index'));

	Route::get('/kerjasama/{id}/hapus', array('as'=>'kerjasama.hapus', 'uses'=> 'Kerjasama\KerjasamaController@hapus'));
	
	Route::post('/kerjasama/tambah', array('as'=>'kerjasama.tambah', 'uses'=> 'Kerjasama\KerjasamaController@tambahkerjasama'));
	Route::get('/kerjasama/{id}/edit', array('as'=>'kerjasama.edit', 'uses'=> 'Kerjasama\KerjasamaController@editkerjasama'));
	Route::put('/kerjasama/{id}/simpanedit', array('as'=>'kerjasama.simpanedit', 'uses'=> 'Kerjasama\KerjasamaController@simpanedit'));

	 //bantuan dana
	Route::get('/bantuandana',array('as'=>'bantuandana', 'uses'=> 'BantuanDana\BantuanDanaController@index'));

	Route::get('/bantuandana/{id}/hapus', array('as'=>'bantuandana.hapus', 'uses'=> 'BantuanDana\BantuanDanaController@hapus'));
	
	Route::post('/bantuandana/tambah', array('as'=>'bantuandana.tambah', 'uses'=> 'BantuanDana\BantuanDanaController@tambahbantuandana'));
	Route::get('/bantuandana/{id}/edit', array('as'=>'bantuandana.edit', 'uses'=> 'BantuanDana\BantuanDanaController@editbantuandana'));
	Route::put('/bantuandana/{id}/simpanedit', array('as'=>'bantuandana.simpanedit', 'uses'=> 'BantuanDana\BantuanDanaController@simpanedit'));


Route::get('/eventhome', function () {
	$data = [
		'page_title' => 'Home',
	];
    return view('event/index', $data);
});
Route::resource('events', 'EventController');
Route::get('/api', function () {
	$events = DB::table('events')->select('id', 'name', 'title', 'start_time as start', 'end_time as end')->get();
	foreach($events as $event)
	{
		$event->title = $event->title . ' - ' .$event->name;
		$event->url = url('events/' . $event->id);
	}
	return $events;
});

});
