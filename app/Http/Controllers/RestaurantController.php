<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use \App\Restaurant;

use DateTime;

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

    // ------------------------------------------------ MODI REST ------------------------------------------------

    public function modificaRestaurant($id)
    {
        //Busqueda
        $restaurant = Restaurant::findOrFail($id);
        $restId = $restaurant->id;
        $nom = $restaurant->nom;
        $descripcio = $restaurant->descripcio;
        $estrelles = $restaurant->estrelles;
        $preu = $restaurant->preu;
        $tipus_cuina = $restaurant->tipus_cuina;
        $adreca = $restaurant->adreca;
        $telefon = $restaurant->telefon;
        $horari = $restaurant->horari;
        $idPropi = $restaurant->user_id;

        $opinions = \App\Opinio::all()->where('restaurant_id', $restId);

        return view('modificaRestaurant', compact('restId','nom', 'idPropi', 'descripcio', 'estrelles', 'preu', 'tipus_cuina', 'adreca', 'telefon', 'horari', 'opinions'));
   
    }

    public function updateRestaurant($id, Request $request)
    {
        $restaurant = Restaurant::findOrFail($id);
        $restaurant->nom = $request -> nNom;
        $restaurant->descripcio = $request -> nDescripcio;
        $restaurant->preu = $request -> nPreu;
        $restaurant->tipus_cuina = $request -> nTipus;
        $restaurant->adreca = $request -> nAdreca;
        $restaurant->telefon = $request -> nTelefon;
        $restaurant->horari = $request -> nHorari;
        $restaurant->save();

        $restId = $restaurant->id;
        $nom = $restaurant->nom;
        $descripcio = $restaurant->descripcio;
        $estrelles = $restaurant->estrelles;
        $preu = $restaurant->preu;
        $tipus_cuina = $restaurant->tipus_cuina;
        $adreca = $restaurant->adreca;
        $telefon = $restaurant->telefon;
        $horari = $restaurant->horari;
        $idPropi = $restaurant->user_id;

        $opinions = \App\Opinio::all()->where('restaurant_id', $restId);

        return view('mostra_restaurant', compact('restId', 'nom', 'idPropi', 'descripcio', 'estrelles', 'preu', 'tipus_cuina', 'adreca', 'telefon', 'horari', 'opinions'));
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
        $horari = $restaurant->horari;
        $idPropi = $restaurant->user_id;

        $opinions = \App\Opinio::all()->where('restaurant_id', $restId);

        // $sqlQuery = "SELECT usuari_id FROM opinions WHERE restaurant_id = ".$restId.";";
        // $opinionsComenter = DB::select(DB::raw($sqlQuery));
        $usuaris = \App\User::all();



        return view('mostra_restaurant', compact('restId','nom', 'idPropi', 'descripcio', 'estrelles', 'preu', 'tipus_cuina', 'adreca', 'telefon', 'horari', 'opinions', 'usuaris'));
    }

    // ------------------------------------------------ OPINIO ---------------------------------------------------

    public function opinioSend(Request $request, $id)
    {
        $dataPujada = new DateTime(); 

        $opinioAgrega = new \App\Opinio;

        $opinioAgrega->usuari_id = Auth::user()->id;
        $opinioAgrega->restaurant_id = $id;
        $opinioAgrega->data = $dataPujada->format('Y-m-d H:i:s');
        $opinioAgrega->comentari = $request->opinio;
        $opinioAgrega->puntuacio = $request->puntuacio;
        $opinioAgrega->save(); 

        $restaurant = Restaurant::findOrFail($id);
        $restId = $restaurant->id;
        $nom = $restaurant->nom;
        $descripcio = $restaurant->descripcio;
        $estrelles = $restaurant->estrelles;
        $preu = $restaurant->preu;
        $tipus_cuina = $restaurant->tipus_cuina;
        $adreca = $restaurant->adreca;
        $telefon = $restaurant->telefon;
        $horari = $restaurant->horari;
        $idPropi = $restaurant->user_id;

        $opinions = \App\Opinio::all()->where('restaurant_id', $restId);

        $usuaris = \App\User::all();

        return view('mostra_restaurant', compact('restId','nom', 'idPropi', 'descripcio', 'estrelles', 'preu', 'tipus_cuina', 'adreca', 'telefon', 'horari', 'opinions', 'usuaris'));
    }

    // ------------------------------------------------ CREA REST ------------------------------------------------

    public function creacioRestaurant()
    {

        return view('creacioRestaurant');
    }

    public function agregarRestaurant(Request $request)
    {
        $propRest = $request->idUser;

        $propietari = \App\Restaurant::all()->where('user_id', "=", $propRest);

        if ($propietari->isEmpty())
        {
            $restAgregar = new \App\Restaurant;
            $restAgregar-> nom = $request -> nomRest;
            $restAgregar-> descripcio = $request -> descRest;
            $restAgregar-> user_id = $request -> idUser;
            $restAgregar-> tipus_cuina = $request -> tipusCuina;
            $restAgregar-> preu = $request -> preuRest;
            $restAgregar-> adreca = $request -> adrecaRest;
            $restAgregar-> telefon = $request -> telefonRest;
            $restAgregar-> horari = $request -> horariRest;

            $restAgregar-> save();
            $id = $restAgregar->id;

        }
        else{
            dd($propietari);
        }
        // $restaurants = \App\Restaurant::all();
        // $data["restaurants"] = $restaurants;
        
        // return view('restaurants', $data);

        $restaurant = Restaurant::findOrFail($id);

        $restId = $restaurant->id;
        $nom = $restaurant->nom;
        $descripcio = $restaurant->descripcio;
        $estrelles = $restaurant->estrelles;
        $preu = $restaurant->preu;
        $tipus_cuina = $restaurant->tipus_cuina;
        $adreca = $restaurant->adreca;
        $telefon = $restaurant->telefon;
        $horari = $restaurant->horari;

        $idPropi = Auth::user()->id;

        $opinions = \App\Opinio::all()->where('restaurant_id', $restId);


        return view('mostra_restaurant', compact('idPropi','restId','nom', 'descripcio', 'estrelles', 'preu', 'tipus_cuina', 'adreca', 'telefon', 'horari', 'opinions'));
   
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






