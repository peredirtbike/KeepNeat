<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Auth;
use Image;

class UserController extends Controller
{
    //
    public function redireccionar()
    {
        return view('editar_usuari');
    }

    public function editar(Request $request)
    {
        $idUsuari = $request -> idUser;

        $data = \App\User::find($idUsuari);

        $data->name = $request -> nameUser;
        $data->cognoms = $request -> secondUser;
        $data->nif = $request -> dniUser;
        $data->data_naixement = $request -> naixementUser;

        $data->save();
        return view('welcome');
    }

    public function perfil(){
        return view('perfil', array('user'=>Auth::user()) );
    }

    public function update_avatar(Request $request){

    	// Handle the user upload of avatar
    	if($request->hasFile('avatar')){
    		$avatar = $request->file('avatar');
    		$filename = time() . '.' . $avatar->getClientOriginalExtension();
    		Image::make($avatar)->resize(100, 100)->save( public_path('/uploads/avatars/' . $filename ) );

    		$user = Auth::user();
    		$user->avatar = $filename;
    		$user->save();
    	}

    	return view('perfil', array('user' => Auth::user()) );

    }
}
