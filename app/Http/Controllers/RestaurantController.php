<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

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
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function mostrar()
    {
        $restaurants = \App\Restaurant::all();

        $data["restaurants"] = $restaurants;


        return view('restaurant', $data);
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
            $restAgregar-> save();

        }
        else{
            dd($propietari);
        }
        $restaurants = \App\Restaurant::all();
        $data["restaurants"] = $restaurants;
        
        return view('restaurant', $data);
    }
   


    // ------------------------------------------------ IMATGE ------------------------------------------------

    public function imatge()
    {

        return view('imatgeRestaurant');
    }

    function upload(Request $request)
    {

        $usuariFolder = $request -> nameUser;

        $image = $request->file('file');

        $imageName = uniqid().time() . '.' . $image->extension();

        $image->move(public_path('uploads/restaurant/'.$usuariFolder), $imageName);

        return response()->json(['success' => $imageName]);
    }

    function fetch()
    {
        $usuariFolder = Auth::user()->id;

        $images = \File::allFiles(public_path('uploads/restaurant/'.$usuariFolder));
        $output = '<div class="row">';
        foreach($images as $image)
        {
        $output .= '
        <div class="col-md-2" style="margin-bottom:16px;" align="center">
                    <img src="'.asset('uploads/restaurant/'.$usuariFolder.'/' . $image->getFilename()).'" class="img-thumbnail" width="175" height="175" style="height:175px;" />
                    <button type="button" class="btn btn-link remove_image" id="'.$image->getFilename().'">Remove</button>
                </div>
        ';
        }
        $output .= '</div>';
        echo $output;
    }

    function delete(Request $request)
    {
        $usuariFolder = Auth::user()->id;

     if($request->get('name'))
     {
      \File::delete(public_path('uploads/restaurant/'.$usuariFolder. '/' . $request->get('name')));
     }
    }
}
?>






