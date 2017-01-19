<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\User;
use App\Transformers\UserTransformer;
use Auth;
class AuthController extends Controller
{
    public function register(Request $request, User $user)
    {
    	$this->validate($request, [
    			'name' => 'required',
    			'email' => 'required|email|unique:users',
    			'nama_perusahaan' => 'required',
    			'alamat_perusahaan' => 'required',
    			'deskripsi_perusahaan' => 'required',
    			'jenis_perusahaan' => 'required',
    			'password' => 'required|min:6',
    		]);

    	$user = $user->create([
    		'name' => $request->name,
    		'email' => $request->email,
    		'nama_perusahaan' => $request->nama_perusahaan,
    		'alamat_perusahaan' => $request->alamat_perusahaan,
    		'deskripsi_perusahaan' => $request->deskripsi_perusahaan,
    		'jenis_perusahaan' => $request->jenis_perusahaan,
    		'api_token' => bcrypt($request->email),
    		'password' => bcrypt($request->password)

    		]);

    	return fractal()
    	->item($user)
    	->transformWith(new UserTransformer)
    	->toArray();
    }

    public function login(Request $request, User $user)
    {
        if (!Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return response()->json(['error' => 'Your credential is wrong'], 401);
        }

        $user = $user->find(Auth::user()->id);

        return fractal()
        ->item($user)
        ->transformWith(new UserTransformer)
        ->addMeta([
        	'token' => $user->api_token,])
        ->toArray();
    }
}
