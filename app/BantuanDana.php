<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BantuanDana extends Model
{
    protected $table = "bantuandana";
	protected $primaryKey = 'id_penerima';
	public $timestamps = false;
}
