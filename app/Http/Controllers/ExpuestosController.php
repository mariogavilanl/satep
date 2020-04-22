<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Mail;
use App\Mail\ResultadoExamen;


use Carbon\Carbon;
use App\Examen;

class ExpuestosController extends Controller
{
    
    public function index(){    

        return view("expuestos.index");

    }

    public function getExamenesTerminados(){        
    
        $examen = Examen::with(["usuario", "paciente", "agente", "carga"])
        ->get(); 

        return $examen;

    }
    
    public function buscarResultados(Request $r){

        return view("expuestos.resultadosexamen");
    }

    public function verResultadosExamen(Request $r){

        $ex = new Examen();
        $datos = $ex
        ->where("examens.id", "=", $r["id"])
        ->join('agentes', 'examens.agentes_id', '=', 'agentes.id')
        ->join('users', 'users.id', '=', 'examens.users_id')
        ->join('pacientes', 'pacientes.id', '=', 'examens.pacientes_id')
        
        ->first(['agentes.*', 'examens.*','users.*', 'pacientes.*']);
   
        return view("expuestos.verResultadosExamen", ["examen" => $datos]);


    }



    
}
