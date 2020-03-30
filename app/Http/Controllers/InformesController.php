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
        $data = DB::table("cargas")->where("semestre", "=", $semestres)->get();
        
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
        
        //TODO : filtro de año, agregar
        $examens = Examen::
        where("examens.agentes_id", "=", 18)    
        ->join("cargas", "cargas.id", "=", "examens.cargas_id") 
        ->whereIn("cargas.semestre", $semestres)
        ->with(["carga", "paciente"])
        ->get();
        
        $data = $examens->groupBy("carga.gerencia")->map(function($item){
           
            return [
                "alterado" => $item->where("as_estado1", "=", "Alterado")->count(), 
                "total" => $item->count(),
                
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

        //primer trimestre [enero 1 - marzo 3]
        if ($ma >= 1 && $ma < 4) {
            array_push($semestres, 3);
        }

        //segundo trimestre [abril 4 - junio 6]
        if ($ma >= 4 && $ma <= 6) {
            array_push($semestres, 4);
        }

        //tercer trimestre [julio 7 - septiembre 9]
        if ($ma >= 7 && $ma <= 9) {
            array_push($semestres, 5);
        }

        //cuerto trimestre [octubre 10 - diciembre 12]
        if ($ma >= 10 && $ma <= 12) {
            array_push($semestres, 6);
        }

        return $semestres;
    }
}
