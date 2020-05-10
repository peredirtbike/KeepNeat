<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Image;
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

    public function crear()
    {
        return view('crear_restaurant');
    }

    // public function agregarRestaurant(Request $request)
    // {
    //     $restAgregar = new \App\Restaurant;
    //     $restAgregar-> nom = $request -> nomRest;
    //     $restAgregar-> descripcio = $request -> descRest;

    // }
   
    function upload(Request $request)
    {
     $image = $request->file('file');

     $imageName = uniqid().time() . '.' . $image->extension();

     $image->move(public_path('uploads/restaurant'), $imageName);

     return response()->json(['success' => $imageName]);
    }

    function fetch()
    {
     $images = \File::allFiles(public_path('uploads/restaurant'));
     $output = '<div class="row">';
     foreach($images as $image)
     {
      $output .= '
      <div class="col-md-2" style="margin-bottom:16px;" align="center">
                <img src="'.asset('uploads/restaurant/' . $image->getFilename()).'" class="img-thumbnail" width="175" height="175" style="height:175px;" />
                <button type="button" class="btn btn-link remove_image" id="'.$image->getFilename().'">Remove</button>
            </div>
      ';
     }
     $output .= '</div>';
     echo $output;
    }

    function delete(Request $request)
    {
     if($request->get('name'))
     {
      \File::delete(public_path('uploads/restaurant/' . $request->get('name')));
     }
    }
}
?>






