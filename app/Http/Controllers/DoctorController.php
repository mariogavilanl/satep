<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Mail;
use App\Mail\ResultadoExamen;


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

        $r->session()->put('idExamen', $r["idExamen"]);
        $r->session()->put('idRealExaman', $r["idRealExaman"]);
        
        

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

    public function apruebaExamen(Request $r){
        

        $affected = DB::table('examens')
                      ->where('id', session()->get('idExamen'))
                      ->update([
                            'observacionDoctor' => $r["comentario"],
                            "idDoctor" => Auth::id(),
                            "estadoExamen" => 1
                          ]);
                          
             $examen = DB::table("examens")->where("cargas_id", "=", session()->get('idExamen'))->first();   
             $carga = DB::table("cargas")->where("id", "=", $examen->cargas_id)->first(); 

            $cargaUpdate = DB::table('cargas')
            ->where('id', $carga->id)
            ->update([
                  'informadopaciente' => 1
                  
                ]);   
        

            
        Mail::to($carga->email)->queue(new ResultadoExamen(session()->get('idRealExaman')));

        return "ok";

    }

    public function rechazaExamen(Request $r){

        $affected = DB::table('examens')
        ->where('id', session()->get('idExamen'))
        ->update([
              'observacionDoctor' => $r["comentario"],
              "idDoctor" => Auth::id(),
              "estadoExamen" => 2
            ]);     

            $examen = DB::table("examens")->where("id", "=", session()->get('idExamen'))->first();
            $carga = DB::table("cargas")->where("id", "=", $examen->cargas_id)->first(); 

            $cargaUpdate = DB::table('carga')
            ->where('id', $carga->id)
            ->update([
                  'informadopaciente' => 1                  
            ]);          
                
        Mail::to($carga->email)->queue(new ResultadoExamen(session()->get('idRealExaman')));
                
        return "ok";

    }    
}
