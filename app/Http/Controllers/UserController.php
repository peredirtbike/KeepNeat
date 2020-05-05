<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Auth;
use Image;

class UserController extends Controller
{
    //
  
    public function perfil(){
        return view('perfil', array('user'=>Auth::user()) );
    }

    public function update_avatar(Request $request){
        
        // NOM, COGNOM, DATA_NAIXEMENT, NIF
        $idUsuari = $request -> idUser;

        $usuari = \App\User::find($idUsuari);

        $usuari->name = $request -> nameUser;
        $usuari->cognoms = $request -> secondUser;
        $usuari->nif = $request -> dniUser;
        $usuari->data_naixement = $request -> naixementUser;

        $usuari->save();

    	// FOTO PERFIL
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
