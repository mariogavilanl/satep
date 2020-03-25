<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


class EncuestaController extends Controller
{
    //

    public function index(Request $r){

        //id carga 
        //id encuestaidCargas
        
    
        $r->session()->put('idCarga', $r["idcarga"]);
        $r->session()->put('idAgente', $r["idencuesta"]);
        $r->session()->put('nroSap', $r["idsap"]);
       // dd($r->session()->get('idCarga'), $r->session()->get('idAgente'), $r->session()->get('nroSap'));      
       // return view('encuesta.encuesta_'.$r["idencuesta"]);
        return view('encuesta.encuesta_'.$r["idencuesta"]);

    }
}
