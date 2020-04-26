<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Mail;
use App\Mail\ResultadoExamen;


use Carbon\Carbon;
use App\Examen;
use PDF;

class DoctorController extends Controller
{
    
    public function index(){    

        
        return view("doctor.index");

    }

    public function generarPdfExamen(Request $r){
        $ex = new Examen();
        $examen = $ex
        ->where("examens.id", "=", $r["idExamen"])
        ->join('agentes', 'examens.agentes_id', '=', 'agentes.id')
        ->join('users', 'users.id', '=', 'examens.users_id')
        ->join('pacientes', 'pacientes.id', '=', 'examens.pacientes_id')
        
        ->first(['agentes.*', 'examens.*','users.*', 'pacientes.*']);

        //$pdf = \PDF::loadView('doctor.verResultadosExamen', ["examen" => $examen]);
        //$pdf = \PDF::loadView('doctor.resultadosPdf.asPdf', ["examen" => $examen]);
        set_time_limit(300);
        // $pdf = App::make('dompdf.wrapper');

        // $view =  \View::make('doctor.resultadosPdf.asPdf', $examen )->render();
    
        // $pdf = \App::make('dompdf.wrapper');
    
        $pdf = PDF::loadView('doctor.resultadosPdf.asPdf', ["examen" => $examen]);
        return $pdf->download("archivo.pdf");


        // $pdf = \PDF::loadView('doctor/resultadosPdf/asPdf', $examen);
 
        // return $pdf->download('archivo.pdf');



        // $pdf = \PDF::loadView('doctor/resultadosPdf/asPdf', $examen);
 
        // return $pdf->download('archivo.pdf');
        
        // $pdf->save(storage_path().'_filename.pdf');

        // return $pdf->download('resultado.pdf');


        //return view("doctor.verResultadosExamen", ["examen" => $datos]);

        
        

    }


    public function getExamenesTerminados(){        
    
        $examen = Examen::with(["usuario", "paciente", "agente", "carga"])
        ->get(); 

        return $examen;

    }
    
    public function buscarResultados(Request $r){

        return view("doctor.resultadosexamen");
    }

    public function verResultadosExamen(Request $r){

        $ex = new Examen();
        $datos = $ex
        ->where("examens.id", "=", $r["id"])
        ->join('agentes', 'examens.agentes_id', '=', 'agentes.id')
        ->join('users', 'users.id', '=', 'examens.users_id')
        ->join('pacientes', 'pacientes.id', '=', 'examens.pacientes_id')
        
        ->first(['agentes.*', 'examens.*','users.*', 'pacientes.*']);

        
        return view("doctor.verResultadosExamen", ["examen" => $datos]);


    }

    public function verResultadosFechas(Request $r){ 


        $fechaInicio = explode("-",$r["fechaInicio"])[2]."-".explode("-",$r["fechaInicio"])[1]."-".explode("-",$r["fechaInicio"])[0]; 
        $fechaFin = explode("-",$r["fechaFin"])[2]."-".explode("-",$r["fechaFin"])[1]."-".explode("-",$r["fechaFin"])[0];
                
        $examen = Examen::with(["usuario", "paciente", "agente", "carga"])
        ->whereBetween("created_at", [$fechaInicio, $fechaFin])
        ->get(); 

        $ex = new Examen();
        $datos = $ex
        ->whereBetween("examens.created_at", [$fechaInicio, $fechaFin])
        ->join('agentes', 'examens.agentes_id', '=', 'agentes.id')
        ->join('users', 'users.id', '=', 'examens.users_id')
        ->join('pacientes', 'pacientes.id', '=', 'examens.pacientes_id')
        
        ->get(['agentes.*', 'examens.*','users.*', 'pacientes.*']);



        return view("doctor.verResultadosFecha", ["lista" => $examen, "caca" => "señal"]);
        // , ['lista' => $examen]);

    }
  

    public function verResultados(Request $r){
  

        $r->session()->put('idExamen', $r["idExamen"]);
        $r->session()->put('idRealExaman', $r["idRealExaman"]);
        
        

        $examen = Examen::with(["usuario", "paciente", "agente", "carga"])
        ->where([["cargas_id","=", $r["idExamen"]], ["as_reevaluacion", "=", 1]])
        ->whereNull("realizadoEncuenta")
        ->get();


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

       dd($examen, $encuesta);
       
        return view("doctor.resultados", $data);

    }

    public function apruebaExamen(Request $r){
        

        $affected = DB::table('examens')
                      ->where('id', session()->get('idRealExaman'))
                      ->update([
                            'observacionDoctor' => $r["comentario"],
                            "idDoctor" => Auth::id(),
                            "estadoExamen" => 1
                          ]);
                          
             $examen = DB::table("examens")->where("id", "=", session()->get('idRealExaman'))->first();   
             $carga = DB::table("cargas")->where("id", "=", $examen->cargas_id)->first(); 

            $cargaUpdate = DB::table('cargas')
            ->where('id', $carga->id)
            ->update([
                  'informadopaciente' => 1
                  
                ]);   
        

  //dd(session()->get('idExamen'), session()->get('idRealExaman'), $examen, $carga);
        Mail::to($carga->email)->queue(new ResultadoExamen($examen->id));

        return "ok";

    }

    public function rechazaExamen(Request $r){

        $affected = DB::table('examens')
        ->where('id', session()->get('idRealExaman'))
        ->update([
              'observacionDoctor' => $r["comentario"],
              "idDoctor" => Auth::id(),
              "estadoExamen" => 2
            ]);     

            $examen = DB::table("examens")->where("id", "=", session()->get('idRealExaman'))->first();
            $carga = DB::table("cargas")->where("id", "=", $examen->cargas_id)->first(); 

            $cargaUpdate = DB::table('cargas')
            ->where('id', $carga->id)
            ->update([
                  'informadopaciente' => 1                  
            ]);          
                
        Mail::to($carga->email)->queue(new ResultadoExamen($examen->id));
                
        return "ok";

    }    
}
