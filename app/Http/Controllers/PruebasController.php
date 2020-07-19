<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Mail;
use App\Mail\ResultadoExamen;

use Carbon\Carbon;
use DateTime;
use DateTimeZone;

use App\Agentes;
use App\Cargas;
use App\Examen;
use App\User;
 

class PruebasController extends Controller
{
    //

    public function index()
    {

        return 'home';
    }

public function realizadoHoy(){

    $fechaHoy = date_format(new DateTime(null, new DateTimeZone('America/Santiago')), 'Y-m-d'); 
    $examens = Examen::
    
    where("users_id", "=", Auth::id())
    ->whereDate("examens.created_at", "=", new DateTime(null, new DateTimeZone('America/Santiago')))
    ->join("pacientes", "pacientes.id", "=", "examens.pacientes_id")
    ->join("agentes", "examens.agentes_id", "=", "agentes.id")
    ->join("users", "examens.users_id", "=", "users.id")
    ->get(["users.*","pacientes.*", "examens.*", "agentes.*", "examens.created_at as fechaExamen", "examens.id as idExamen"]);

    $usuario = User::where("id", Auth::id())->first();

    return view("prueba.listaExamenesRealizados", ["realizados" => $examens, "usuario" => $usuario]);
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
        ->whereIn('agentes.id', $pico)
        ->join('agentes', 'cargas.agentes_id', '=', 'agentes.id')
        ->leftjoin('cargaarsenico', 'cargaarsenico.idCarga', '=', 'cargas.id')
        ->orderBy('cargas.id', 'ASC')
        ->get(['agentes.*', 'cargas.*', 'cargaarsenico.idCarga','cargaarsenico.fechaExamen', 'cargaarsenico.sem' ]);


        return view('prueba/lista')->with(['pico' => $lista,
         'semestre' => $semestre,
         'mes' => $mes,
         'fechaactual' => $fechaactual]);
    }

    

    public function Reevaluar(Request $r){
        $r->session()->put('idReevaluacion', $r["id"]);
        return view("prueba.ex_as_reevaluacion");
    }

    public function Reevaluaciones(Request $r){

        $data = Examen::where([["as_estado", "=", "Alterado"], ["as_reevaluacion", "=", 1]])
        ->with(['paciente', 'agente']) 
        ->get();

        return view("prueba.reevaluaciones", ["data" => $data]);



    }

    public function realizaExamenes(Request $r)
    {
        
        // Si ese id carga tiene FK en tabla de examen ?????

        $pico = DB::table('examens')
        ->where('cargas_id', '=', $r["idCarga"])
        ->first();

        // dd($pico);
        
        if ($pico != null) {

            $pichula = substr($pico->as_FECHALAB1, 0, -9 );
            
            $ano = explode("-", $pichula)[0];
            $mes = explode("-", $pichula)[1];
            $dia = explode("-", $pichula)[2]; 
            
            $r->session()->put('examenIncompleto', $dia."-".$mes."-".$ano);

        }
        else{
            $r->session()->put('examenIncompleto', '');
        }

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
