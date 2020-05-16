<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use \App\Restaurant;


use Image;
use Auth;

use Carbon\Carbon;



class RestaurantController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function mostrarTodos()
    {
        $restaurants = \App\Restaurant::all();

        $data["restaurants"] = $restaurants;


        return view('restaurants', $data);
    }

    public function mostrar_restaurante($id)
    {
        $restaurant = Restaurant::findOrFail($id);
        $restId = $restaurant->id;
        $nom = $restaurant->nom;
        $descripcio = $restaurant->descripcio;
        $estrelles = $restaurant->estrelles;
        $preu = $restaurant->preu;
        $tipus_cuina = $restaurant->tipus_cuina;
        $adreca = $restaurant->adreca;
        $telefon = $restaurant->telefon;
        $horari = $restaurant->telefon;
        



        return view('mostra_restaurant', compact('restId','nom', 'descripcio', 'estrelles', 'preu', 'tipus_cuina', 'adreca', 'telefon', 'horari'));
    }

    // ------------------------------------------------ CREA REST ------------------------------------------------

    public function creacioRestaurant()
    {

        return view('creacioRestaurant');
    }

    public function agregarRestaurant(Request $request)
    {

        $propRest = $request->idUser;

        $propietari = \App\Restaurant::all()->where('id_usuari', $propRest);

        if ($propietari->isEmpty())
        {
            $restAgregar = new \App\Restaurant;
            $restAgregar-> nom = $request -> nomRest;
            $restAgregar-> descripcio = $request -> descRest;
            $restAgregar-> user_id = $request -> idUser;
            $restAgregar-> estrelles = $request -> estrellesRest;
            $restAgregar-> preu = $request -> preuRest;
            $restAgregar-> adreca = $request -> adrecaRest;
            $restAgregar-> telefon = $request -> telefonRest;
            $restAgregar-> horari = $request -> horariRest;





            $restAgregar-> save();

        }
        else{
            dd($propietari);
        }
        $restaurants = \App\Restaurant::all();
        $data["restaurants"] = $restaurants;
        
        return view('restaurants', $data);
    }
   


    // ------------------------------------------------ IMATGE ------------------------------------------------

    public function imatge($id)
    {
        $restaurant = Restaurant::findOrFail($id);
        $id_restaurant = $restaurant->id;

        return view('imatgeRestaurant', compact('id_restaurant'));
    }

    function upload(Request $request)
    {

        $usuariFolder = $request -> idRest;

        $image = $request->file('file');

        $imageName = uniqid().time() . '.' . $image->extension();

        $image->move(public_path('uploads/restaurant/'.$usuariFolder), $imageName);

        return response()->json(['success' => $imageName]);
    }

    function fetch(Request $request)
    {
        $idRestaurant = $request->id;

        $images = \File::allFiles(public_path('uploads/restaurant/'.$idRestaurant));
        $output = '<div class="row">';
        foreach($images as $image)
        {
        $output .= '
        <div class="col-md-2" style="margin-bottom:16px;" align="center">
                    <img src="'.asset('uploads/restaurant/'.$idRestaurant.'/' . $image->getFilename()).'" class="img-thumbnail" width="175" height="175" style="height:175px;" />
                    <button type="button" class="btn btn-link remove_image" id="'.$image->getFilename().'">Remove</button>
                </div>
        ';
        }
        $output .= '</div>';
        echo $output;
    }

    function delete(Request $request)
    {
        $idRestaurant = $request->id;
     if($request->get('name'))
     {
      \File::delete(public_path('uploads/restaurant/'.$idRestaurant. '/' . $request->get('name')));
     }
    }
}
?>






