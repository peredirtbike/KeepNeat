<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
