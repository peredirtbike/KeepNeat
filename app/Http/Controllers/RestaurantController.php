<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        $restAgregar-> save();
        return back()->with('agregar', 'Restaurant creat correctament');
    }


}
