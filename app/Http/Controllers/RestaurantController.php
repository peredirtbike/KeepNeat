<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Image;


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

    public function agregarRestaurant(Request $request)
    {
        $restAgregar = new \App\Restaurant;
        $restAgregar-> nom = $request -> nomRest;
        $restAgregar-> descripcio = $request -> descRest;

      
        // FOTO RESTAURANT
        
        $this->validate($request, [
            'images' => 'required',
            'images.*' => 'mimes:png,jpg,jpeg'
        ]);

    	if($request->hasfile('images')){
            $x = 0;
           foreach ($request->file('images') as $image)
           {
                $nameRest = $request -> nomRest;
                $carpeta = '/uploads/restaurant/'.$nameRest.'/';
                $name = $x.'.'.$image->getClientOriginalExtension();

                Image::make($image)->save( public_path($carpeta . $name ) );

                $x++;
                $data[] =  $name;
           }
        }
        $restAgregar-> imatges = json_encode($data);
        $restAgregar-> save();

        return back()->with('agregar', 'Restaurant creat correctament');
    }


}
