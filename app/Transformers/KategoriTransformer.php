<?php

namespace App\Transformers;

use Illuminate\Database\Eloquent\Model;
use App\KategoriKerjasama;
use League\Fractal\TransformerAbstract;

class KategoriTransformer extends TransformerAbstract
{
   public function transform(KategoriKerjasama $kategorikerjasama)
   {
   	return [
   		'id' => $kategorikerjasama->id,
   		'kategori' => $kategorikerjasama->KategoriKerjasama,
   		];
   	}
   }
}
