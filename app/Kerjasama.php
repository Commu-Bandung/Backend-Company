<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kerjasama extends Model
{
	//protected $primaryKey = "idx";
	protected $table = "kerjasama";
	protected $primaryKey = 'id_kerjasama';
	public $timestamps = false;
	public function KategoriKerjasama(){
    	return $this->hasMany('App\KategoriKerjasama', 'foreign_key', 'id');
    }

}
