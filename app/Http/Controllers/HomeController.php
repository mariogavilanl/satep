<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ObjetosMode;
use Faker\Factory as Faker;
use App\Carga;

class HomeController extends Controller
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
    public function index()
    {

        return view('home');
    }

    public function pico()
    {
        $persona = new Persona();
        return view('prueba/pico');
    }
}
