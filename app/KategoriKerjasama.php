<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KategoriKerjasama extends Model
{
    protected $table = "kategorikerjasama";
    public $timestamps = false;
    protected $primaryKey = 'id';

    protected $fillable = array('id','kategori');

    public function Kerjasama(){
    	return $this->hashMany('App\Kerjasama','foreign_key','
    		kodeKategori');
    }
}
