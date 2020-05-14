<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Restaurant;


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

        $restaurants = \App\Restaurant::paginate(6);
        $data["restaurants"] = $restaurants;


        return view('welcome', $data);
    }










}
