<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Restaurant;
use Auth;
use \App\Opinio;



class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if(Auth::user()){
            $idRestaurant = Restaurant::where('user_id',Auth::user()->id)->get('id');
        }
        $restaurants = \App\Restaurant::paginate(6);
        $data["restaurants"] = $restaurants;


        return view('welcome', $data, compact('idRestaurant'));
    }










}
