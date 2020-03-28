<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Carga;
use Illuminate\Support\Facedes\DB;

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
}
