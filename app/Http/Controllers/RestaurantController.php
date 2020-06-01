<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use \App\Restaurant;
use \App\Imatge;
use \App\Opinio;
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
       
        return view('modificaRestaurant', compact('restaurant'));
        
    }

    public function updateRestaurant($id, Request $request)
    {
        $restaurant = Restaurant::findOrFail($id);
        $restaurant->fill($request->all());
        $restaurant->save();

        $imatges = Imatge::where('restaurant_id', $restaurant->id)->get();

        return view('mostra_restaurant', compact('restaurant','imatges') );
    }

    // ---------------------------------------------------MOSTRAR RESTAURANT --------------------------------------------------

    public function mostrar_restaurante($id)
    {
        $restaurant = Restaurant::findOrFail($id);
        $imatges = Imatge::where('restaurant_id', $restaurant->id);

        return view('mostra_restaurant', compact('restaurant','imatges') );
    }

    // ------------------------------------------------ OPINIO ---------------------------------------------------

    public function opinioSend(Request $request, $id)
    {
        $dataPujada = new DateTime(); 

        $opinioAgrega = new Opinio;

        $opinioAgrega->usuari_id = Auth::user()->id;
        $opinioAgrega->restaurant_id = $id;
        $opinioAgrega->data = $dataPujada->format('Y-m-d H:i:s');
        $opinioAgrega->comentari = $request->opinio;
        $opinioAgrega->puntuacio = $request->puntuacio;
        $opinioAgrega->save(); 

        return redirect()->route('restaurant_id', $id);    
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

        $usuaris = \App\User::all();


        if ($propietari->isEmpty())
        {
            $restaurant = new Restaurant;
            $restaurant->fill($request->all());
            $restaurant-> save();

            return redirect()->route('restaurant_id',$restaurant->id);

        }
        else
        {
            return redirect()->route('home');
        }
   
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


        $imatge = new Imatge;
        $imatge-> restaurant_id = $usuariFolder;
        $imatge-> rutaImatge = $imageName;
        $imatge->save();

        dd($imageName);

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
        Imatge::where('rutaImatge', $request->get('name'))->delete();

     if($request->get('name'))
     {
      \File::delete(public_path('uploads/restaurant/'.$idRestaurant. '/' . $request->get('name')));
     }
    }



}
?>






