<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Auth;
use Image;
use App\Pais;
use App\Ciutat;
use App\Direccio;


class UserController extends Controller
{
    //
  
    public function perfil(){
        // PAISOS
        $paisos = Pais::all();
        $data['paisos'] = $paisos;

        // CIUTATS
        $ciutats = Ciutat::all();
        $data['ciutats'] = $ciutats;

        // DIRECCIO
        $direccions = Direccio::all(); 
        $data['direccions'] = $direccions;

        return view('perfil', array('user'=>Auth::user()), $data );
    }

    public function update_avatar(Request $request){
        
        // NOM, COGNOM, DATA_NAIXEMENT, NIF
        $idUsuari = $request -> idUser;

        $usuari = \App\User::find($idUsuari);

        $usuari->name = $request -> nameUser;
        $usuari->cognoms = $request -> secondUser;
        $usuari->nif = $request -> dniUser;
        $usuari->data_naixement = $request -> naixementUser;


    	// FOTO PERFIL
    	if($request->hasFile('avatar')){
    		$avatar = $request->file('avatar');
    		$filename = time() . '.' . $avatar->getClientOriginalExtension();
    		Image::make($avatar)->resize(100, 100)->save( public_path('/uploads/avatars/' . $filename ) );

    		$user = Auth::user();
    		$user->avatar = $filename;
    		$user->save();
        }

        
        // PAISOS
        $paisos = Pais::all();
        $data['paisos'] = $paisos;

        // CIUTATS
        $ciutats = Ciutat::all();
        $data['ciutats'] = $ciutats;
        
        // DIRECCIO
        $direccions = Direccio::all(); 
        $data['direccions'] = $direccions;

        $direc = new \App\Direccio;

        $direc->carrer = $request -> CarrDirUser;
        $direc->numero = $request -> NumDirUser;
        $direc->pis = $request -> PisDirUser;

        $direc->ciutats_id = $request -> ciutatDirUser;

        $direc->save();
        $usuari->direccions_id = $direc->id;
        $usuari->save();

    	return view('perfil', array('user'=>Auth::user()), $data);

    }

    public function delete_user(Request $request)
    {
        $idUsuari = $request -> idUser;
        $usuari = \App\User::find($idUsuari);


        $usuari->delete();
        // $user->delete();
        Auth::logout();

        return view('welcome');
    }
}
