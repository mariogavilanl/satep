<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Examen;

class DoctorController extends Controller
{
    
    public function index(){    

        return view("doctor.index");

    }

    public function getExamenesTerminados(){        
    
        $examen = Examen::with(["usuario", "paciente", "agente", "carga"])
        ->get(); 

        return $examen;

    }

    public function verResultados(Request $r){

        $examen = Examen::with(["usuario", "paciente", "agente", "carga"])
        ->where("cargas_id", $r["idExamen"])
        ->whereNull("realizadoEncuenta")
        ->first();

        $encuesta = Examen::with(["usuario", "paciente", "agente", "carga"])
        ->where([
            ["cargas_id", "=", $r["idExamen"]],
            ["realizadoEncuenta" , "=", 1]
        ])        
        ->first();
        // separar en 3 objetos, [examen, encuesta]
          //  dd($examen, $encuesta);
       $data["data"] = $examen;
       $data["encuesta"] = $encuesta;

        return view("doctor.resultados", $data);

    }
}
