<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Carga;
use App\Examen;
use Illuminate\Support\Facades\DB;
use \DateTime;
use \DateTimeZone;

class InformesController extends Controller
{
    //
    
    public function index(){
       
        return view("dashboard.dashboard");
    }
    //devuelve la cantidad de agentes arsenico y el total de agentes
    public function dataCarga(){

        $carga = Carga::all();
        $data = $carga->groupBy("agente.glosaAgente")->map(function($c) { 
            return $c->count(); 
        });

        return $data;
        
    }

    public function dataProgramadoRealizados(){

        // obtener programados
        //fa = fecha actual
        $fa = new DateTime(null, new DateTimeZone('America/Santiago'));
        $da = intval($fa->format("d"));
        $ma = intval($fa->format("m"));
        $aa = intval($fa->format("Y"));
        
        $funciones = new InformesController();
        $semestres = $funciones->getSemestres();

        $programados = DB::table("cargas")->whereIn("semestre" , $semestres)->get();
        $cantRealizados = $programados->where("realizado", "=", 1)->count();

        $respuesta = ["programados" => $programados->count(), "realizados" => $cantRealizados];
        
        return $respuesta;
        
    }

    public function dataPorGerencia(){

        //array[] 
        //$semestres = getSemestres();
        $funciones = new InformesController();
        $semestres = $funciones->getSemestres();
        
        //TODO : filtro de año, agregar
        $data = DB::table("cargas")->whereIn("semestre",  $semestres)->get();
        
        $ge = $data->groupBy("gerencia")->map(function($item){ 
            return ["realizado" => $item->where("realizado", "=", 1)->count(), "total" => $item->count()]; 
        });

        
        return $ge;

    }

    public function getArsenicoAlterados(){

        //array[] 
        //$semestres = getSemestres();
        $funciones = new InformesController();
        $semestres = $funciones->getSemestres();

        $examens = Examen::
        where([["examens.agentes_id", "=", 18],["examens.as_estado", "<>", null]])    
        ->join("cargas", "cargas.id", "=", "examens.cargas_id") 
        ->whereIn("cargas.semestre", $semestres)
        ->with(["carga", "paciente"])
        ->get();

        $data = $examens->groupBy("carga.gerencia")->map(function($item){
           
            return [
                
                "alterado" => $item->where("as_estado", "=", "Alterado")->count(),
               // "normal" => $item->where("as_estado", "=", "normal")->count(),
               // "alterado" => $item->where("as_estado1", "=", "Alterado")->count(),
                "total" => $item->where("as_estado", "=", "Normal")->count(),
               
                
            ]; 
        });
        
        return $data;
    }

    public function getSemestres(){

        //fa = fecha actual
        $fa = new DateTime(null, new DateTimeZone('America/Santiago'));
        $da = intval($fa->format("d"));
        $ma = intval($fa->format("m"));
        $aa = intval($fa->format("Y"));

        $semestres = [];

            //SEMESTRES

            //primer semestre
        if ($ma >= 1 && $ma <= 6) {
            array_push($semestres, 1);
        }

        //segundo semenestre
        if ($ma >= 7 && $ma <= 12) {
            array_push($semestres, 2);
        }

            //TRIMESTRES

        //primer trimestre 
        if ($ma >= 1 && $ma <= 4) {
            array_push($semestres, 3);
        }

        //segundo trimestre 
        if ($ma >= 5 && $ma <= 8) {
            array_push($semestres, 4);
        }

        //tercer trimestre 
        if ($ma >= 9 && $ma <= 12) {
            array_push($semestres, 5);
        }

       

        return $semestres;
    }
}
