<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Mail;
use App\Mail\ResultadoExamen;

use Carbon\Carbon;

use App\Agentes;
use App\Cargas;
use App\Examen;
 

class PruebasController extends Controller
{
    //

    public function index()
    {

        return 'home';
    }

    public function pico()
    {



        $hora = time();
        $semestre = (date("m", $hora) >= 7 ? 2 : 1);
        $fechaactual = Carbon::now();
        
        $mes = date("m", $hora);
        $carga = new Cargas();
        $idUsuario = $id = Auth::id();
        $idrol = DB::table('users')
        ->where('id', $idUsuario)
        ->select('roles_id')
        ->get()[0];



        $pico = [];

        $rol_agentes = DB::table('rol__agentes')
        ->where('roles_id', $idrol->roles_id)
        ->get();

        foreach ($rol_agentes as $key) {
            array_push($pico, $key->agentes_id);
        }
               
       

        $lista = $carga
        ->whereIn('agentes_id', $pico)
        ->join('agentes', 'cargas.agentes_id', '=', 'agentes.id')
        //->where('cargas.realizado', 0)
        // ->orWhere('cargas.realizadoco', 0)
        ->get(['agentes.*', 'cargas.*']);
   
        return view('prueba/lista')->with(['pico' => $lista,
         'semestre' => $semestre,
         'mes' => $mes,
         'fechaactual' => $fechaactual]);
    }


    public function realizaExamenes(Request $r)
    {
        


        $carga = new Cargas();   
        $cargaresult = $carga
        ->where('id', $r["idCarga"])
        ->first();

        $r->session()->put('nroSap', $cargaresult->nroSap);
        $r->session()->put('idCargas', $cargaresult->id);
        
        $exame = new Examen();
        
        
        
        return view('Examen/RealizaExamen')
        ->with(['examens' => $cargaresult]);  
    }

    public function examen_vigilante_privado()
    {

        return view("prueba/ex_vigilante_privado");
    }
    public function realizaExamenesCO(Request $r)
    {
        $carga = new Cargas();   
        $cargaresult = $carga
        ->where('id', $r["idCarga"])
        ->first();

        $r->session()->put('nroSap', $cargaresult->nroSap);
        $r->session()->put('idCargas', $cargaresult->id);
        
        return view('Examen/RealizaExamenCO');  

    }    


}
