<?php

namespace App\Transformers;

use App\User;
use League\Fractal\TransformerAbstract;

class UserTransformer extends TransformerAbstract
{
    public function transform(User $user)
    {
    	return [
            'name'          => $user->name,
            'email'         => $user->email,
            'nama_perusahaan' => $user->nama_perusahaan,
            'alamat_perusahaan' => $user->alamat_perusahaan,
            'deskripsi_perusahaan' => $user->deskripsi_perusahaan,
            'jenis_perusahaan' => $user->jenis_perusahaan,
            'registered'    => $user->created_at->diffForHumans(),
        ];
    }
}
