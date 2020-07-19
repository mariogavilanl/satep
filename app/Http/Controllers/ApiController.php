<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use DateTime;
use DateTimeZone;


use App\Cargas;
use App\Paciente;
use App\Examen;
use App\Cargaarsenico;
use Carbon\Carbon;


class ApiController extends Controller
{
    //
    public function getStatusCarga (Request $r){

        $cargas = new Cargas();
        $data = $cargas
        ->where("id", $r["idCarga"])
        ->get();
        return(json_encode($data));

    }

    public function ReevaluacionExamen(Request $r){
      //as_reevaluacion
    
      
      $fechalab1 = new DateTime(explode('-', $r["FECHALAB1"])[2]."-".explode('-', $r["FECHALAB1"])[1]."-".explode('-', $r["FECHALAB1"])[0], new DateTimeZone('America/Santiago'));
      $fechalab2 = new DateTime(explode('-', $r["FECHAMUESTRA"])[2]."-".explode('-', $r["FECHAMUESTRA"])[1]."-".explode('-', $r["FECHAMUESTRA"])[0], new DateTimeZone('America/Santiago'));
      

      $ex = DB::table("examens")
      ->where("id", session()->get('idReevaluacion'))
      ->first();


      $examen = new Examen();
                    
                    $examen->users_id = $ex->users_id;
                    $examen->pacientes_id = $ex->pacientes_id;
                    $examen->agentes_id = $ex->agentes_id;
                    $examen->cargas_id = $ex->cargas_id;
                    $examen->as_reevaluacion = 1;
                    $examen->as_FECHALAB1 = $fechalab1;
                    $examen->as_FECHAMUESTRA = $fechalab2;
                    $examen->as_UG_G = $r["as_UG_G"];
                    $examen->as_estado = $r["as_estado"] ;
      
                    $examen->save();

      $affected = DB::table('examens')
      ->where('id', session()->get('idReevaluacion'))
      ->update(['as_reevaluacion' => 0]);

      return redirect()->route('reevaluaciones');

    }

public function getEncuesta(Request $r){
  
  
  $carga = new Cargas();    

  $carga = DB::table('cargas')
  ->where('id', session()->get('idCargas'))
  ->get()[0];


  $encuesta = new Encuesta();

  $encuesta->dato("PICO");
  $encuesta->save();

  dd($encuesta->all()->last());

  return "PICO";
}

    public function getExamenVigilantePrivado(Request $r){


       // dd(session()->get('nroSap'));
       // dd( $id = Auth::id());



      
    //    $dt = Carbon::now(explode('/', $fecha)[0], explode('/', $fecha)[1], explode('/', $fecha)[2]);   
       $now = new DateTime(explode('-', $fecha)[2]."-".explode('-', $fecha)[1]."-".explode('-', $fecha)[0], new DateTimeZone('America/Santiago'));
     
        $existePaciente =  DB::table('pacientes')->where([
            'nroSap' => session()->get('nroSap')
        ])->get();

        $carga = new Cargas();      
        $paciente = new Paciente();   
        $idPaciente = 0; 

        $carga = DB::table('cargas')
        ->where('id', session()->get('idCargas'))
        ->get()[0];
                //paciente no existe en tabla local "pacientes"
                if( $existePaciente->count() == 0){

                    $paciente->nroSap = session()->get('nroSap');
                    $paciente->rut = $carga->rut;
                    $paciente->primerNombre = $carga->primerNombre;
                    $paciente->segundoNombre = $carga->segundoNombre;            
                    $paciente->primerApellido = $carga->primerApellido;
                    $paciente->segundoApellido = $carga->segundoApellido;
                    $paciente->cargo = $carga->cargo;
                    $paciente->gerencia = $carga->gerencia;
                    $paciente->fechaNacimiento = $carga->fechaNacimiento;
                    $paciente->sexo = $carga->sexo;
                    $paciente->save();
        
                    $idPaciente = $paciente->select('id')->where('nroSap', session()->get('nroSap'))->get()[0]->id;                    
                    $idUsuario = $id = Auth::id();
                    
                    $examen = new Examen();
                    
                    $examen->users_id = $idUsuario;
                    $examen->pacientes_id = $idPaciente;
                    $examen->agentes_id = $carga->agentes_id;
                    $examen->oido_derecho_1 = $r["oido_derecho_1"];
                    $examen->oido_derecho_2 = $r["oido_derecho_2"];
                    $examen->oido_derecho_3 = $r["oido_derecho_3"];
                    $examen->oido_derecho_4 = $r["oido_derecho_4"];
                    $examen->oido_derecho_6 = $r["oido_derecho_6"];
                    $examen->oido_derecho_8 = $r["oido_derecho_8"];
                    $examen->oido_derecho_prom_1_6 = $r["oido_derecho_prom_1_6"];
                    $examen->oido_derecho_dano_aud = $r["oido_derecho_dano_aud"];
                    $examen->oido_izquierdo_1 = $r["oido_izquierdo_1"];
                    $examen->oido_izquierdo_2 = $r["oido_izquierdo_2"];
                    $examen->oido_izquierdo_3 = $r["oido_izquierdo_3"];
                    $examen->oido_izquierdo_4 = $r["oido_izquierdo_4"];
                    $examen->oido_izquierdo_6 = $r["oido_izquierdo_6"];
                    $examen->oido_izquierdo_8 = $r["oido_izquierdo_8"];
                    $examen->espirometria_basal = $r["espirometria_basal"];
        
                    $examen->oido_izquierdo_prom_1_6 = $r["oido_izquierdo_prom_1_6"];
                    $examen->oido_izquierdo_dano_aud = $r["oido_izquierdo_dano_aud"];
        
                    $examen->inc = $r["inc"];
                    $examen->vig_observacion1 = $r["vig_observacion1"];
                    $examen->prueba_esfuerzo_pulso_2 = $r["prueba_esfuerzo_pulso_2"];
                    $examen->prueba_esfuerzo_pulso_3 = $r["prueba_esfuerzo_pulso_3"];
                    $examen->vig_ir = $r["vig_ir"];
                    $examen->vig_fechaExamen = $now;
        
                    $examen->save();
        
                    $affected = DB::table('cargas')
                      ->where('id', session()->get('idCargas'))
                      ->update(['realizado' => 1]);
                      return redirect()->action('PruebasController@pico');
                }
                else{

                    $idPaciente = DB::table('pacientes')
                    ->where('nroSap' , session()->get('nroSap'))
                    ->first()->id;
                    


                    $examen = new Examen();
            
                    $examen->users_id = Auth::id();
                    $examen->pacientes_id = $idPaciente;
                    $examen->agentes_id = $carga->agentes_id;
                    $examen->oido_derecho_1 = $r["oido_derecho_1"];
                    $examen->oido_derecho_2 = $r["oido_derecho_2"];
                    $examen->oido_derecho_3 = $r["oido_derecho_3"];
                    $examen->oido_derecho_4 = $r["oido_derecho_4"];
                    $examen->oido_derecho_6 = $r["oido_derecho_6"];
                    $examen->oido_derecho_8 = $r["oido_derecho_8"];
                    $examen->oido_derecho_prom_1_6 = $r["oido_derecho_prom_1_6"];
                    $examen->oido_derecho_dano_aud = $r["oido_derecho_dano_aud"];
                    $examen->oido_izquierdo_1 = $r["oido_izquierdo_1"];
                    $examen->oido_izquierdo_2 = $r["oido_izquierdo_2"];
                    $examen->oido_izquierdo_3 = $r["oido_izquierdo_3"];
                    $examen->oido_izquierdo_4 = $r["oido_izquierdo_4"];
                    $examen->oido_izquierdo_6 = $r["oido_izquierdo_6"];
                    $examen->oido_izquierdo_8 = $r["oido_izquierdo_8"];
                    $examen->espirometria_basal = $r["espirometria_basal"];
        
                    $examen->oido_izquierdo_prom_1_6 = $r["oido_izquierdo_prom_1_6"];
                    $examen->oido_izquierdo_dano_aud = $r["oido_izquierdo_dano_aud"];
        
                    $examen->inc = $r["inc"];
                    $examen->vig_observacion1 = $r["vig_observacion1"];
                    $examen->prueba_esfuerzo_pulso_2 = $r["prueba_esfuerzo_pulso_2"];
                    $examen->prueba_esfuerzo_pulso_3 = $r["prueba_esfuerzo_pulso_3"];
                    $examen->vig_ir = $r["vig_ir"];
                    $examen->vig_fechaExamen = $now;
        
                    $examen->save();
        
                    $affected = DB::table('cargas')
                      ->where('id', session()->get('idCargas'))
                      ->update(['realizado' => 1]);
                    
                      return redirect()->action('PruebasController@pico');
                   
                }

    }    
    function setExamenCO(Request $r){
        // session()->get('idCargas')
        // session()->get('nroSap')
       
        $validatedData = $r->validate([

            'fechaExamen' => 'required',
            'co_pulso' => 'required|alpha_num',
            'co_peso' => 'required|alpha_num',
            'co_talla' => 'required|alpha_num',
            
        ]);



        $fecha = $r["fechaExamen"];
      
        //    $dt = Carbon::now(explode('/', $fecha)[0], explode('/', $fecha)[1], explode('/', $fecha)[2]);   
           $now = new DateTime(explode('-', $fecha)[2]."-".explode('-', $fecha)[1]."-".explode('-', $fecha)[0], new DateTimeZone('America/Santiago'));
         
       
        $existePaciente =  DB::table('pacientes')->where([
            'nroSap' => session()->get('nroSap')
        ])->get();
        $paciente = new Paciente();    
    
        //paciente no existe en tabla local "pacientes"
        if( $existePaciente->count() == 0){

            $carga = DB::table('cargas')
            ->where('id', session()->get('idCargas'))
            ->get()[0];

                     
   
            $paciente->nroSap = session()->get('nroSap');
            $paciente->rut = $carga->rut;
            $paciente->primerNombre = $carga->primerNombre;
            $paciente->segundoNombre = $carga->segundoNombre;            
            $paciente->primerApellido = $carga->primerApellido;
            $paciente->segundoApellido = $carga->segundoApellido;
            $paciente->cargo = $carga->cargo;
            $paciente->gerencia = $carga->gerencia;
            $paciente->fechaNacimiento = $carga->fechaNacimiento;
            $paciente->sexo = $carga->sexo;
            $paciente->save();

            $idPaciente = $paciente->select('id')->where('nroSap', session()->get('nroSap'))->get()[0]->id;                    
            $idUsuario = $id = Auth::id();
    
            $examen = new Examen();
                    
            $examen->users_id = Auth::id();
            $examen->pacientes_id = $idPaciente;
            $examen->agentes_id = 17;
            $examen->co_declaracion_salud = $r["co_declaracion_salud"];
            $examen->co_orientado_a_riesgos = $r["co_orientado_a_riesgos"];
            $examen->co_evaluar_equilibrio = $r["co_evaluar_equilibrio"];
            $examen->co_presion_arterial = $r["co_presion_arterial"];
            $examen->co_pulso = $r["co_pulso"];
            $examen->co_peso = $r["co_peso"];
            $examen->co_talla = $r["co_talla"];
            $examen->co_imc = $r["co_imc"];
            $examen->co_glicemia_ayunas = $r["co_glicemia_ayunas"];
            $examen->co_ecg_reposo_mayor_40 = $r["co_ecg_reposo_mayor_40"];
            $examen->co_examen_visual = $r["co_examen_visual"];
            $examen->co_pruebas_hepaticas = $r["co_pruebas_hepaticas"];
            $examen->co_rcv_framingham = $r["co_rcv_framingham"];
            $examen->co_fechaExamen = $now;
            $examen->save();

            

            $affected = DB::table('cargas')
              ->where('id', session()->get('idCargas'))
              ->update(['realizadoco' => 1]);
              return redirect()->action('PruebasController@pico');
        }
        else{

            $idPaciente = DB::table('pacientes')
            ->where('nroSap' , session()->get('nroSap'))
            ->first()->id;
            $examen = new Examen();
                    
            $examen->users_id = Auth::id();
            $examen->pacientes_id = $idPaciente;
            $examen->agentes_id = 17;
            $examen->co_declaracion_salud = $r["co_declaracion_salud"];
            $examen->co_orientado_a_riesgos = $r["co_orientado_a_riesgos"];
            $examen->co_evaluar_equilibrio = $r["co_evaluar_equilibrio"];
            $examen->co_presion_arterial = $r["co_presion_arterial"];
            $examen->co_pulso = $r["co_pulso"];
            $examen->co_peso = $r["co_peso"];
            $examen->co_talla = $r["co_talla"];
            $examen->co_imc = $r["co_imc"];
            $examen->co_glicemia_ayunas = $r["co_glicemia_ayunas"];
            $examen->co_ecg_reposo_mayor_40 = $r["co_ecg_reposo_mayor_40"];
            $examen->co_examen_visual = $r["co_examen_visual"];
            $examen->co_pruebas_hepaticas = $r["co_pruebas_hepaticas"];
            $examen->co_rcv_framingham = $r["co_rcv_framingham"];
            $examen->co_fechaExamen = $now;
            $examen->save();

            

            $affected = DB::table('cargas')
              ->where('id', session()->get('idCargas'))
              ->update(['realizadoco' => 1]);
              return redirect()->action('PruebasController@pico');            

        }


    }
    public function getExamenaa(Request $r){


        // dd(session()->get('nroSap'));
        // dd( $id = Auth::id());
 
        $fecha = $r["FECHAFLUJO1"]; 
        $fecha2 = $r["FECHAFLUJO2"];
        $fecha3 = $r["FECHAENCUESTA"];
     //    $dt = Carbon::now(explode('/', $fecha)[0], explode('/', $fecha)[1], explode('/', $fecha)[2]);   
        $now = new DateTime(explode('-', $fecha)[2]."-".explode('-', $fecha)[1]."-".explode('-', $fecha)[0], new DateTimeZone('America/Santiago'));
        $now2 = new DateTime(explode('-', $fecha2)[2]."-".explode('-', $fecha2)[1]."-".explode('-', $fecha2)[0], new DateTimeZone('America/Santiago'));
        $now3 = new DateTime(explode('-', $fecha3)[2]."-".explode('-', $fecha3)[1]."-".explode('-', $fecha3)[0], new DateTimeZone('America/Santiago'));
        $existePaciente =  DB::table('pacientes')->where([
             'nroSap' => session()->get('nrSap')
         ])->get();
 
         $carga = new Cargas();      
         $paciente = new Paciente();   
         $idPaciente = 0; 
 
         $carga = DB::table('cargas')
         ->where('id', session()->get('idCargas'))
         ->get()[0];
                 //paciente no existe en tabla local "pacientes"
                 if( $existePaciente->count() == 0){
 
                     $paciente->nroSap = session()->get('nroSap');
                     $paciente->rut = $carga->rut;
                     $paciente->primerNombre = $carga->primerNombre;
                     $paciente->segundoNombre = $carga->segundoNombre;            
                     $paciente->primerApellido = $carga->primerApellido;
                     $paciente->segundoApellido = $carga->segundoApellido;
                     $paciente->cargo = $carga->cargo;
                     $paciente->gerencia = $carga->gerencia;
                     $paciente->fechaNacimiento = $carga->fechaNacimiento;
                     $paciente->sexo = $carga->sexo;
                     $paciente->save();
         
                     $idPaciente = $paciente->select('id')->where('nroSap', session()->get('nroSap'))->get()[0]->id;                    
                     $idUsuario = $id = Auth::id();
                     
                     $examen = new Examen();
                     
                     $examen->aa_FECHAFLUJO1 = $now;
                     $examen->users_id = $idUsuario;
                     $examen->pacientes_id = $idPaciente;
                     $examen->agentes_id = $carga->agentes_id;
                     $examen->aa_PEF_OBS1 = $r["PEF_OBS1"];
                     $examen->aa_PEF_TEORICO1 = $r["PEF_TEORICO1"];
                     $examen->aa_PORCETAJE_FLUJO1 = $r["PORCETAJE_FLUJO1"];
                     $examen->aa_ESTADO = $r["ESTADO"];
                     $examen->aa_FECHAFLUJO2 = $now2;
                     $examen->aa_PEF_OBS2 = $r["PEF_OBS2"];
                     $examen->aa_PEF_TEORICO2 = $r["PEF_TEORICO2"];
                     $examen->aa_RESULTADO = $r["RESULTADO"];
                     $examen->aa_ESTADO_2 = $r["ESTADO_2"];
                     $examen->aa_VARIABILIDAD = $r["VARIABILIDAD"];
                     $examen->aa_CONCLUSION_FLUJO = $r["CONCLUSION_FLUJO"];
                     $examen->aa_FECHAENCUESTA = $now3;
                     $examen->aa_CONCLUSION_ENCUESTA = $r["CONCLUSION_ENCUESTA"];
                     $examen->aa_CONCLUSION_FINAL = $r["CONCLUSION_FINAL"];
                     
                     $examen->save();
         
                     $affected = DB::table('cargas')
                       ->where('id', session()->get('idCargas'))
                       ->update(['realizado' => 1]);
                       return redirect()->action('PruebasController@pico');
                 }
                 else{
 
                     $idPaciente = DB::table('pacientes')
                     ->where('nroSap' , session()->get('nroSap'))
                     ->first()->id;
                     
                     $examen = new Examen();
                     
                     $examen->aa_FECHAFLUJO1 = $now;
                     $examen->users_id = $idUsuario;
                     $examen->pacientes_id = $idPaciente;
                     $examen->agentes_id = $carga->agentes_id;
                     $examen->aa_PEF_OBS1 = $r["PEF_OBS1"];
                     $examen->aa_PEF_TEORICO1 = $r["PEF_TEORICO1"];
                     $examen->aa_PORCETAJE_FLUJO1 = $r["PORCETAJE_FLUJO1"];
                     $examen->aa_ESTADO = $r["ESTADO"];
                     $examen->aa_FECHAFLUJO2 = $now2;
                     $examen->aa_PEF_OBS2 = $r["PEF_OBS2"];
                     $examen->aa_PEF_TEORICO2 = $r["PEF_TEORICO2"];
                     $examen->aa_RESULTADO = $r["RESULTADO"];
                     $examen->aa_ESTADO_2 = $r["ESTADO_2"];
                     $examen->aa_VARIABILIDAD = $r["VARIABILIDAD"];
                     $examen->aa_CONCLUSION_FLUJO = $r["CONCLUSION_FLUJO"];
                     $examen->aa_FECHAENCUESTA = $now3;
                     $examen->aa_CONCLUSION_ENCUESTA = $r["CONCLUSION_ENCUESTA"];
                     $examen->aa_CONCLUSION_FINAL = $r["CONCLUSION_FINAL"];
 
                     $examen->save();
         
                     $affected = DB::table('cargas')
                       ->where('id', session()->get('idCargas'))
                       ->update(['realizado' => 1]);
                     
                       return redirect()->action('PruebasController@pico');
                    
                 }
                }
           /////////////////////////////////ALTURA FISIA AF
            
                 public function getExamenaf(Request $r){


                    // dd(session()->get('nroSap'));
                    // dd( $id = Auth::id());
             
                    $fecha = $r["FECHA_EVALUACION"];
                    $fecha2 = $r["FECHA_REEVALUACION"];
                 //    $dt = Carbon::now(explode('/', $fecha)[0], explode('/', $fecha)[1], explode('/', $fecha)[2]);   
                    $now = new DateTime(explode('-', $fecha)[2]."-".explode('-', $fecha)[1]."-".explode('-', $fecha)[0], new DateTimeZone('America/Santiago'));
                    $now2 = new DateTime(explode('-', $fecha2)[2]."-".explode('-', $fecha2)[1]."-".explode('-', $fecha2)[0], new DateTimeZone('America/Santiago'));
                    
                    $existePaciente =  DB::table('pacientes')->where([
                         'nroSap' => session()->get('nroSap')
                     ])->get();
             
                     $carga = new Cargas();      
                     $paciente = new Paciente();   
                     $idPaciente = 0; 
             
                     $carga = DB::table('cargas')
                     ->where('id', session()->get('idCargas'))
                     ->get()[0];
                             //paciente no existe en tabla local "pacientes"
                             if( $existePaciente->count() == 0){
             
                                 $paciente->nroSap = session()->get('nroSap');
                                 $paciente->rut = $carga->rut;
                                 $paciente->primerNombre = $carga->primerNombre;
                                 $paciente->segundoNombre = $carga->segundoNombre;            
                                 $paciente->primerApellido = $carga->primerApellido;
                                 $paciente->segundoApellido = $carga->segundoApellido;
                                 $paciente->cargo = $carga->cargo;
                                 $paciente->gerencia = $carga->gerencia;
                                 $paciente->fechaNacimiento = $carga->fechaNacimiento;
                                 $paciente->sexo = $carga->sexo;
                                 $paciente->save();
                     
                                 $idPaciente = $paciente->select('id')->where('nroSap', session()->get('nroSap'))->get()[0]->id;                    
                                 $idUsuario = $id = Auth::id();
                                 
                                 $examen = new Examen();
                                 
                                 $examen->users_id = $idUsuario;
                                 $examen->pacientes_id = $idPaciente;
                                 $examen->agentes_id = $carga->agentes_id;

                               
                                 $examen->af_FECHA_EVALUACION = $now;
                                 $examen->af_OPTOMETRIA = $r["OPTOMETRIA"];
                                 $examen->af_EX_NEU_EQUI = $r["EX_NEU_EQUI"];
                                 $examen->af_CONCLUSION = $r["CONCLUSION"];
                                 $examen->af_INDICACION_MEDICA = $r["INDICACION_MEDICA"];
                                 $examen->af_FECHA_REEVALUACION = $now2;
                                 $examen->af_CONCLUSION_REEVALUACION = $r["CONCLUSION_REEVALUACION"];    
                     
                                 $examen->save();
                     
                                 $affected = DB::table('cargas')
                                   ->where('id', session()->get('idCargas'))
                                   ->update(['realizado' => 1]);
                                   return redirect()->action('PruebasController@pico');
                             }
                             else{
             
                                 $idPaciente = DB::table('pacientes')
                                 ->where('nroSap' , session()->get('nroSap'))
                                 ->first()->id;
                                 
             
             
                                 $examen = new Examen();
                         
                                 $examen->users_id = Auth::id();
                                 $examen->pacientes_id = $idPaciente;
                                 $examen->agentes_id = $carga->agentes_id;
                                 $examen->af_FECHA_EVALUACION = $now;
                                 $examen->af_OPTOMETRIA = $r["OPTOMETRIA"];
                                 $examen->af_EX_NEU_EQUI = $r["EX_NEU_EQUI"];
                                 $examen->af_CONCLUSION = $r["CONCLUSION"];
                                 $examen->af_INDICACION_MEDICA = $r["INDICACION_MEDICA"];
                                 $examen->af_FECHA_REEVALUACION = $now2;
                                 $examen->af_CONCLUSION_REEVALUACION = $r["CONCLUSION_REEVALUACION"];
                                             
                                                                           
                                
                                 $examen->save();
                     
                                 $affected = DB::table('cargas')
                                   ->where('id', session()->get('idCargas'))
                                   ->update(['realizado' => 1]);
                                 
                                   return redirect()->action('PruebasController@pico');
                                
                             }
                            }
                   ////////////////////// altura geografica ag
                            
                             public function getExamenag(Request $r){


                                // dd(session()->get('nroSap'));
                                // dd( $id = Auth::id());
                         
                                $fecha = $r["FECHA_EVALUACION"];
                               
                             //    $dt = Carbon::now(explode('/', $fecha)[0], explode('/', $fecha)[1], explode('/', $fecha)[2]);   
                                $now = new DateTime(explode('-', $fecha)[2]."-".explode('-', $fecha)[1]."-".explode('-', $fecha)[0], new DateTimeZone('America/Santiago'));
                              
                                 $existePaciente =  DB::table('pacientes')->where([
                                     'nroSap' => session()->get('nroSap')
                                 ])->get();
                         
                                 $carga = new Cargas();      
                                 $paciente = new Paciente();   
                                 $idPaciente = 0; 
                         
                                 $carga = DB::table('cargas')
                                 ->where('id', session()->get('idCargas'))
                                 ->get()[0];
                                         //paciente no existe en tabla local "pacientes"
                                         if( $existePaciente->count() == 0){
                         
                                             $paciente->nroSap = session()->get('nroSap');
                                             $paciente->rut = $carga->rut;
                                             $paciente->primerNombre = $carga->primerNombre;
                                             $paciente->segundoNombre = $carga->segundoNombre;            
                                             $paciente->primerApellido = $carga->primerApellido;
                                             $paciente->segundoApellido = $carga->segundoApellido;
                                             $paciente->cargo = $carga->cargo;
                                             $paciente->gerencia = $carga->gerencia;
                                             $paciente->fechaNacimiento = $carga->fechaNacimiento;
                                             $paciente->sexo = $carga->sexo;
                                             $paciente->save();
                                 
                                             $idPaciente = $paciente->select('id')->where('nroSap', session()->get('nroSap'))->get()[0]->id;                    
                                             $idUsuario = $id = Auth::id();
                                             
                                             $examen = new Examen();
                                             
                                             $examen->users_id = $idUsuario;
                                             $examen->pacientes_id = $idPaciente;
                                             $examen->agentes_id = $carga->agentes_id;
                                             $examen->ag_FECHA_EVALUACION = $now;
                                             $examen->ag_RX_TORAX_PA = $r["RX_TORAX_PA"];
                                             $examen->ag_CREATINEMIA = $r["CREATINEMIA"];
                                             $examen->ag_CONCLUSION = $r["CONCLUSION"];
                                             $examen->ag_OBSERVACION = $r["OBSERVACION"];
                                                                                       
                                 
                                 
                                            
                                            
                                 
                                             $examen->save();
                                 
                                             $affected = DB::table('cargas')
                                               ->where('id', session()->get('idCargas'))
                                               ->update(['realizado' => 1]);
                                               return redirect()->action('PruebasController@pico');
                                         }
                                         else{
                         
                                             $idPaciente = DB::table('pacientes')
                                             ->where('nroSap' , session()->get('nroSap'))
                                             ->first()->id;
                                             
                         
                         
                                             $examen = new Examen();
                                     
                                             $examen->users_id = Auth::id();
                                             $examen->pacientes_id = $idPaciente;
                                             $examen->agentes_id = $carga->agentes_id;
                                             $examen->ag_FECHA_EVALUACION = $now;
                                             $examen->ag_RX_TORAX_PA = $r["RX_TORAX_PA"];
                                             $examen->ag_CREATINEMIA = $r["CREATINEMIA"];
                                             $examen->ag_CONCLUSION = $r["CONCLUSION"];
                                             $examen->ag_OBSERVACION = $r["OBSERVACION"];
                                                                                       
                                               
                                             $examen->save();
                                 
                                             $affected = DB::table('cargas')
                                               ->where('id', session()->get('idCargas'))
                                               ->update(['realizado' => 1]);
                                             
                                               return redirect()->action('PruebasController@pico');
                                            
                                         }

 
     }

////////////////////////////ARSENICO
     public function getExamenarsenico(Request $r){



        $fecha3 = $r["FECHALAB1"]; //mea
        $fecha1 = $r["FECHAMUESTRA"]; // resultado de pichi


        $fecha2 = $r["FECHA_CONTRAMUESTRA"];
        $fecha4 = $r["FECHALAB2"];
        $now1 = null; // fecha muestra
        $now3 = null; // fecha laboratorio

        if ($fecha1 != null) {
          # code...
          $now1 =  new DateTime(explode('-',$fecha1)[2]."-".explode('-', $fecha1)[1]."-".explode('-', $fecha1)[0], new DateTimeZone('America/Santiago'));    
        }

        if ($fecha3 != null) {
          # code...
          $now3 = new DateTime(explode('-', $fecha3)[2]."-".explode('-', $fecha3)[1]."-".explode('-', $fecha3)[0], new DateTimeZone('America/Santiago'));
        }
        
        
       

        if ($now1 == null) {
          // si examen no viene con fecha de Muestra
          $existePaciente =  DB::table('pacientes')->where([
            'nroSap' => session()->get('nroSap')
        ])->get();

        $carga = new Cargas();      
        $paciente = new Paciente();   
        $idPaciente = 0; 
        $idUsuario = $id = Auth::id();
        $carga = DB::table('cargas')
        ->where('id', session()->get('idCargas'))
        ->get()[0];
                //paciente no existe en tabla local "pacientes"
                if( $existePaciente->count() == 0){

                    $paciente->nroSap = session()->get('nroSap');
                    $paciente->rut = $carga->rut;
                    $paciente->primerNombre = $carga->primerNombre;
                    $paciente->segundoNombre = $carga->segundoNombre;            
                    $paciente->primerApellido = $carga->primerApellido;
                    $paciente->segundoApellido = $carga->segundoApellido;
                    $paciente->cargo = $carga->cargo;
                    $paciente->gerencia = $carga->gerencia;
                    $paciente->fechaNacimiento = $carga->fechaNacimiento;
                    $paciente->sexo = $carga->sexo;
                    $paciente->save();
        
                    $idPaciente = $paciente->select('id')->where('nroSap', session()->get('nroSap'))->get()[0]->id;                    
                    
                    
                    $examen = DB::table('examens')
                    ->where('cargas_id', session()->get('idCargas'))
                    ->first();

                    if ($examen != null) {
                      
                      $update = DB::table('examens')
                      ->where('id', $examen->id)
                      ->update([
                        'as_fechalab1' => $now3,
                        'as_fechamuestra' => $now1,
                        'as_ug_g' => $r["as_UG_G"],
                        'as_estado' => ($r["as_estado"] == "Alterado") ? 1 : 0 
                      ]);
                      
                      return redirect()->action('PruebasController@pico');

                    } else {
                      $examen = new Examen();
               
                      $examen->users_id = $idUsuario;
                      $examen->pacientes_id = $idPaciente;
                      $examen->agentes_id = $carga->agentes_id;
                      $examen->cargas_id = $carga->id;
  
                      $examen->as_reevaluacion = 1;
                      $examen->as_FECHALAB1 = $now3;
                      $examen->as_FECHAMUESTRA = $now1;
                      $examen->as_UG_G = $r["as_UG_G"];
                      $examen->as_ESTADO = $r["as_estado"];
                      $examen->as_reevaluacion = ($r["as_estado"] == "Alterado") ? 1 : 0 ;
          
                      $examen->save();
                      
                      $fechaActual = new DateTime("now", new DateTimeZone('America/Santiago') );
                      $sem = ( intval($fechaActual->format("m")) < 7 ? 1 : 2 );
                    
                      DB::table('cargaarsenico')->insert(
                        [
                          'idCarga' => $carga->id, 
                          'fechaExamen' => new DateTime("now", new DateTimeZone('America/Santiago') ),
                          'sem' => $sem                        
                          
                          ]
                      );

                      // $affected = DB::table('cargas')
                      //   ->where('id', session()->get('idCargas'))
                      //   ->update(['realizado' => 1]);
                         return redirect()->action('PruebasController@pico');

                    }
                }

                else{
                  

                    $idPaciente = DB::table('pacientes')
                    ->where('nroSap' , session()->get('nroSap'))
                    ->first()->id;
                    
                    $examen = DB::table('examens')
                    ->where('cargas_id', session()->get('idCargas'))
                    ->first();

                    if ($examen != null) {
                      
                      $update = DB::table('examens')
                      ->where('id', $examen->id)
                      ->update([
                        'as_fechalab1' => $now3,
                        'as_fechamuestra' => $now1,
                        'as_ug_g' => $r["as_UG_G"],
                        'as_estado' => ($r["as_estado"] == "Alterado") ? 1 : 0 
                      ]);
                      
                      return redirect()->action('PruebasController@pico');

                    } else {
                      $examen = new Examen();
               
                      $examen->users_id = $idUsuario;
                      $examen->pacientes_id = $idPaciente;
                      $examen->agentes_id = $carga->agentes_id;
                      $examen->cargas_id = $carga->id;
  
                      $examen->as_reevaluacion = 1;
                      $examen->as_FECHALAB1 = $now3;
                      $examen->as_FECHAMUESTRA = $now1;
                      $examen->as_UG_G = $r["as_UG_G"];
                      $examen->as_ESTADO = $r["as_estado"];
                      $examen->as_reevaluacion = ($r["as_estado"] == "Alterado") ? 1 : 0 ;
          
                      $examen->save();

                      $fechaActual = new DateTime("now", new DateTimeZone('America/Santiago') );
                      $sem = ( intval($fechaActual->format("m")) < 7 ? 1 : 2 );


                      DB::table('cargaarsenico')->insert(
                        [
                          'idCarga' => $carga->id, 
                          'fechaExamen' => new DateTime("now", new DateTimeZone('America/Santiago') ),
                          'sem' => $sem                        
                          
                          ]
                      );
          
                      // $affected = DB::table('cargas')
                      //   ->where('id', session()->get('idCargas'))
                      //   ->update(['realizado' => 1]);
                         return redirect()->action('PruebasController@pico');

                    }
                   
                }


        } 
        
        
        
        else {
         // cuando si viene la fecha de muestra
          
          $existePaciente =  DB::table('pacientes')->where([
            'nroSap' => session()->get('nroSap')
        ])->get();

        $carga = new Cargas();      
        $paciente = new Paciente();   
        $idPaciente = 0; 
        $idUsuario = $id = Auth::id();
        $carga = DB::table('cargas')
        ->where('id', session()->get('idCargas'))
        ->get()[0];
                //paciente no existe en tabla local "pacientes"
                if( $existePaciente->count() == 0){

                    $paciente->nroSap = session()->get('nroSap');
                    $paciente->rut = $carga->rut;
                    $paciente->primerNombre = $carga->primerNombre;
                    $paciente->segundoNombre = $carga->segundoNombre;            
                    $paciente->primerApellido = $carga->primerApellido;
                    $paciente->segundoApellido = $carga->segundoApellido;
                    $paciente->cargo = $carga->cargo;
                    $paciente->gerencia = $carga->gerencia;
                    $paciente->fechaNacimiento = $carga->fechaNacimiento;
                    $paciente->sexo = $carga->sexo;
                    $paciente->save();
        
                    $idPaciente = $paciente->select('id')->where('nroSap', session()->get('nroSap'))->get()[0]->id;                    
                    
                    

                    $examen = DB::table('examens')
                    ->where('cargas_id', session()->get('idCargas'))
                    ->first();

                    if ($examen != null) {
                      
                      $update = DB::table('examens')
                      ->where('id', $examen->id)
                      ->update([
                        'as_fechalab1' => $now3,
                        'as_fechamuestra' => $now1,
                        'as_ug_g' => $r["as_UG_G"],
                        'as_estado' => ($r["as_estado"] == "Alterado") ? 1 : 0 
                      ]);

                      return redirect()->action('PruebasController@pico');

                    } else {
                      $examen = new Examen();
               
                      $examen->users_id = $idUsuario;
                      $examen->pacientes_id = $idPaciente;
                      $examen->agentes_id = $carga->agentes_id;
                      $examen->cargas_id = $carga->id;
  
                      $examen->as_reevaluacion = 1;
                      $examen->as_FECHALAB1 = $now3;
                      $examen->as_FECHAMUESTRA = $now1;
                      $examen->as_UG_G = $r["as_UG_G"];
                      $examen->as_ESTADO = $r["as_estado"];
                      $examen->as_reevaluacion = ($r["as_estado"] == "Alterado") ? 1 : 0 ;
          
                      $examen->save();

                      $fechaActual = new DateTime("now", new DateTimeZone('America/Santiago') );
                      $sem = ( intval($fechaActual->format("m")) < 7 ? 1 : 2 );

                      DB::table('cargaarsenico')->insert(
                        [
                          'idCarga' => $carga->id, 
                          'fechaExamen' => new DateTime("now", new DateTimeZone('America/Santiago') ),
                          'sem' => $sem                        
                          
                          ]
                      );
          
                      $affected = DB::table('cargas')
                        ->where('id', session()->get('idCargas'))
                        ->update(['realizado' => 1]);
                        return redirect()->action('PruebasController@pico');
                    }
                    


                }
                else{

                    $idPaciente = DB::table('pacientes')
                    ->where('nroSap' , session()->get('nroSap'))
                    ->first()->id;
                    
                    $examen = new Examen();
                    
                    $examen->users_id = $idUsuario;
                    $examen->pacientes_id = $idPaciente;
                    $examen->agentes_id = $carga->agentes_id;
                   $examen->cargas_id = $carga->id;
                    
                   $examen = DB::table('examens')
                   ->where('cargas_id', session()->get('idCargas'))
                   ->first();

                   if ($examen != null) {
                     
                     $update = DB::table('examens')
                     ->where('id', $examen->id)
                     ->update([
                       'as_fechalab1' => $now3,
                       'as_fechamuestra' => $now1,
                       'as_ug_g' => $r["as_UG_G"],
                       'as_estado' => ($r["as_estado"] == "Alterado") ? 1 : 0 
                     ]);
                     
                     $affected = DB::table('cargas')
                     ->where('id', session()->get('idCargas'))
                     ->update(['realizado' => 1]);
                     return redirect()->action('PruebasController@pico');

                     

                   } else {
                     $examen = new Examen();
              
                     $examen->users_id = $idUsuario;
                     $examen->pacientes_id = $idPaciente;
                     $examen->agentes_id = $carga->agentes_id;
                     $examen->cargas_id = $carga->id;
 
                     $examen->as_reevaluacion = 1;
                     $examen->as_FECHALAB1 = $now3;
                     $examen->as_FECHAMUESTRA = $now1;
                     $examen->as_UG_G = $r["as_UG_G"];
                     $examen->as_ESTADO = $r["as_estado"];
                     $examen->as_reevaluacion = ($r["as_estado"] == "Alterado") ? 1 : 0 ;
         
                     $examen->save();

                     
                     $fechaActual = new DateTime("now", new DateTimeZone('America/Santiago') );
                      $sem = ( intval($fechaActual->format("m")) < 7 ? 1 : 2 );

                     DB::table('cargaarsenico')->insert(
                      [
                        'idCarga' => $carga->id, 
                        'fechaExamen' => new DateTime("now", new DateTimeZone('America/Santiago') ),
                        'sem' => $sem                        
                        
                        ]
                    );
         
                     $affected = DB::table('cargas')
                       ->where('id', session()->get('idCargas'))
                       ->update(['realizado' => 1]);
                       return redirect()->action('PruebasController@pico');
                   }
        }
      }
    }


///////////////////////////////////////////// citoestaticos

public function getExamencitoestaticos(Request $r){


    // dd(session()->get('nroSap'));
    // dd( $id = Auth::id());

    $fecha = $r["FECHA_EVALUACION_HEMOGRAMA"];
    $fecha2 = $r["FECHA_EVALUACION_BIOQUIMICO"];
    $fecha3 = $r["FECHA_EVALUACION_TORAX"];
    $fecha4 = $r["FECHA_EVALUACION_CLINICA"];
    $fecha5 = $r["FECHA_EVALUACION_ORINA"];
 
 //    $dt = Carbon::now(explode('/', $fecha)[0], explode('/', $fecha)[1], explode('/', $fecha)[2]);   
    $now = new DateTime(explode('-', $fecha)[2]."-".explode('-', $fecha)[1]."-".explode('-', $fecha)[0], new DateTimeZone('America/Santiago'));
    $now2 = new DateTime(explode('-', $fecha2)[2]."-".explode('-', $fecha2)[1]."-".explode('-', $fecha2)[0], new DateTimeZone('America/Santiago'));
    $now3 = new DateTime(explode('-', $fecha3)[2]."-".explode('-', $fecha3)[1]."-".explode('-', $fecha3)[0], new DateTimeZone('America/Santiago'));
    $now4 = new DateTime(explode('-', $fecha4)[2]."-".explode('-', $fecha4)[1]."-".explode('-', $fecha4)[0], new DateTimeZone('America/Santiago'));
    $now5 = new DateTime(explode('-', $fecha5)[2]."-".explode('-', $fecha5)[1]."-".explode('-', $fecha5)[0], new DateTimeZone('America/Santiago'));
    $existePaciente =  DB::table('pacientes')->where([
         'nroSap' => session()->get('nroSap')
     ])->get();

     $carga = new Cargas();      
     $paciente = new Paciente();   
     $idPaciente = 0; 

     $carga = DB::table('cargas')
     ->where('id', session()->get('idCargas'))
     ->get()[0];
             //paciente no existe en tabla local "pacientes"
             if( $existePaciente->count() == 0){

                 $paciente->nroSap = session()->get('nroSap');
                 $paciente->rut = $carga->rut;
                 $paciente->primerNombre = $carga->primerNombre;
                 $paciente->segundoNombre = $carga->segundoNombre;            
                 $paciente->primerApellido = $carga->primerApellido;
                 $paciente->segundoApellido = $carga->segundoApellido;
                 $paciente->cargo = $carga->cargo;
                 $paciente->gerencia = $carga->gerencia;
                 $paciente->fechaNacimiento = $carga->fechaNacimiento;
                 $paciente->sexo = $carga->sexo;
                 $paciente->save();
     
                 $idPaciente = $paciente->select('id')->where('nroSap', session()->get('nroSap'))->get()[0]->id;                    
                 $idUsuario = $id = Auth::id();
                 
                 $examen = new Examen();
                 
                 $examen->users_id = $idUsuario;
                 $examen->pacientes_id = $idPaciente;
                 $examen->agentes_id = $carga->agentes_id;

               
                 $examen->citoestaticos_FECHA_EVALUACION_HEMOGRAMA = $now;
                 $examen->citoestaticos_RESULTADO_HEMOGRAMA = $r["RESULTADO_HEMOGRAMA"];
                 $examen->citoestaticos_OBSERVACION_HEMOGRAMA = $r["OBSERVACION_HEMOGRAMA"];
                 $examen->citoestaticos_FECHA_EVALUACION_BIOQUIMICO = $now2;
                 $examen->citoestaticos_RESULTADO_BIOQUIMICO = $r["RESULTADO_BIOQUIMICO"];
                 $examen->citoestaticos_OBSERVACION_BIOQUIMICO = $r["OBSERVACION_BIOQUIMICO"];
                 $examen->citoestaticos_FECHA_EVALUACION_TORAX = $now3;
                 $examen->citoestaticos_RESULTADO_BIOQUIMICO = $r["RESULTADO_TORAX"];
                 $examen->citoestaticos_OBSERVACION_BIOQUIMICO = $r["OBSERVACION_TORAX"];
                 $examen->citoestaticos_FECHA_FECHA_EVALUACION_CLINICA = $now4;
                 $examen->citoestaticos_RESULTADO_EVALUACION_CLINICA = $r["RESULTADO_EVALUACION_CLINICA"];
                 $examen->citoestaticos_OBSERVACION_EVALUACION_CLINICA = $r["OBSERVACION_EVALUACION_CLINICA"];
                 $examen->citoestaticos_FECHA_FECHA_EVALUACION_ORINA = $now5;
                 $examen->citoestaticos_RESULTADO_ORINA = $r["RESULTADO_ORINA"];
                 $examen->citoestaticos_OBSERVACION_ORINA = $r["OBSERVACION_ORINA"];
                 $examen->citoestaticos_CONCLUSION = $r["CONCLUSION"];
                
            
     
                 $examen->save();
     
                 $affected = DB::table('cargas')
                   ->where('id', session()->get('idCargas'))
                   ->update(['realizado' => 1]);
                   return redirect()->action('PruebasController@pico');
             }
             else{

                 $idPaciente = DB::table('pacientes')
                 ->where('nroSap' , session()->get('nroSap'))
                 ->first()->id;
                 


                 $examen = new Examen();
         
                 $examen->users_id = Auth::id();
                 $examen->pacientes_id = $idPaciente;
                 $examen->agentes_id = $carga->agentes_id;
                 
                 $examen->citoestaticos_FECHA_EVALUACION_HEMOGRAMA = $now;
                 $examen->citoestaticos_RESULTADO_HEMOGRAMA = $r["RESULTADO_HEMOGRAMA"];
                 $examen->citoestaticos_OBSERVACION_HEMOGRAMA = $r["OBSERVACION_HEMOGRAMA"];
                 $examen->citoestaticos_FECHA_EVALUACION_BIOQUIMICO = $now2;
                 $examen->citoestaticos_RESULTADO_BIOQUIMICO = $r["RESULTADO_BIOQUIMICO"];
                 $examen->citoestaticos_OBSERVACION_BIOQUIMICO = $r["OBSERVACION_BIOQUIMICO"];
                 $examen->citoestaticos_FECHA_EVALUACION_TORAX = $now3;
                 $examen->citoestaticos_RESULTADO_BIOQUIMICO = $r["RESULTADO_TORAX"];
                 $examen->citoestaticos_OBSERVACION_BIOQUIMICO = $r["OBSERVACION_TORAX"];
                 $examen->citoestaticos_FECHA_FECHA_EVALUACION_CLINICA = $now4;
                 $examen->citoestaticos_RESULTADO_EVALUACION_CLINICA = $r["RESULTADO_EVALUACION_CLINICA"];
                 $examen->citoestaticos_OBSERVACION_EVALUACION_CLINICA = $r["OBSERVACION_EVALUACION_CLINICA"];
                 $examen->citoestaticos_FECHA_FECHA_EVALUACION_ORINA = $now5;
                 $examen->citoestaticos_RESULTADO_ORINA = $r["RESULTADO_ORINA"];
                 $examen->citoestaticos_OBSERVACION_ORINA = $r["OBSERVACION_ORINA"];
                 $examen->citoestaticos_CONCLUSION = $r["CONCLUSION"];
                             
                                                           
                
                 $examen->save();
     
                 $affected = DB::table('cargas')
                   ->where('id', session()->get('idCargas'))
                   ->update(['realizado' => 1]);
                 
                   return redirect()->action('PruebasController@pico');
                
             }
            }

///////////////////////////////////////////////////////////////////
public function getExamenformald(Request $r){

    $fecha = $r["FECHA_EVALUACION_HEMOGRAMA"];
    $fecha2 = $r["FECHA_EVALUACION_BIOQUIMICO"];
    $fecha3 = $r["FECHA_EVALUACION_TORAX"];
    $fecha4 = $r["FECHA_EVALUACION_CLINICA"];
    $fecha5 = $r["FECHA_EVALUACION_ORINA"];
 
 //    $dt = Carbon::now(explode('/', $fecha)[0], explode('/', $fecha)[1], explode('/', $fecha)[2]);   
    $now = new DateTime(explode('-', $fecha)[2]."-".explode('-', $fecha)[1]."-".explode('-', $fecha)[0], new DateTimeZone('America/Santiago'));
    $now2 = new DateTime(explode('-', $fecha2)[2]."-".explode('-', $fecha2)[1]."-".explode('-', $fecha2)[0], new DateTimeZone('America/Santiago'));
    $now3 = new DateTime(explode('-', $fecha3)[2]."-".explode('-', $fecha3)[1]."-".explode('-', $fecha3)[0], new DateTimeZone('America/Santiago'));
    $now4 = new DateTime(explode('-', $fecha4)[2]."-".explode('-', $fecha4)[1]."-".explode('-', $fecha4)[0], new DateTimeZone('America/Santiago'));
    $now5 = new DateTime(explode('-', $fecha5)[2]."-".explode('-', $fecha5)[1]."-".explode('-', $fecha5)[0], new DateTimeZone('America/Santiago'));
    $existePaciente =  DB::table('pacientes')->where([
         'nroSap' => session()->get('nroSap')
     ])->get();

     $carga = new Cargas();      
     $paciente = new Paciente();   
     $idPaciente = 0; 

     $carga = DB::table('cargas')
     ->where('id', session()->get('idCargas'))
     ->get()[0];
             //paciente no existe en tabla local "pacientes"
             if( $existePaciente->count() == 0){

                 $paciente->nroSap = session()->get('nroSap');
                 $paciente->rut = $carga->rut;
                 $paciente->primerNombre = $carga->primerNombre;
                 $paciente->segundoNombre = $carga->segundoNombre;            
                 $paciente->primerApellido = $carga->primerApellido;
                 $paciente->segundoApellido = $carga->segundoApellido;
                 $paciente->cargo = $carga->cargo;
                 $paciente->gerencia = $carga->gerencia;
                 $paciente->fechaNacimiento = $carga->fechaNacimiento;
                 $paciente->sexo = $carga->sexo;
                 $paciente->save();
     
                 $idPaciente = $paciente->select('id')->where('nroSap', session()->get('nroSap'))->get()[0]->id;                    
                 $idUsuario = $id = Auth::id();
                 
                 $examen = new Examen();
                 
                 $examen->users_id = $idUsuario;
                 $examen->pacientes_id = $idPaciente;
                 $examen->agentes_id = $carga->agentes_id;
                 $examen->cargas_id = $carga->id;
               
                 $examen->fo_FECHA_EVALUACION_HEMOGRAMA = $now;
                 $examen->fo_RESULTADO_HEMOGRAMA = $r["RESULTADO_HEMOGRAMA"];
                 $examen->fo_OBSERVACION_HEMOGRAMA = $r["OBSERVACION_HEMOGRAMA"];
                 $examen->fo_FECHA_EVALUACION_BIOQUIMICO = $now2;
                 $examen->fo_RESULTADO_BIOQUIMICO = $r["RESULTADO_BIOQUIMICO"];
                 $examen->fo_OBSERVACION_BIOQUIMICO = $r["OBSERVACION_BIOQUIMICO"];
                 $examen->fo_FECHA_EVALUACION_TORAX = $now3;
                 
                 $examen->fo_RESULTADO_TORAX = $r["RESULTADO_TORAX"];
                 $examen->fo_OBSERVACION_TORAX = $r["OBSERVACION_TORAX"];
                 $examen->fo_FECHA_EVALUACION_CLINICA = $now4;
                 $examen->fo_RESULTADO_EVALUACION_CLINICA = $r["RESULTADO_EVALUACION_CLINICA"];
                 $examen->fo_OBSERVACION_EVALUACION_CLINICA = $r["OBSERVACION_EVALUACION_CLINICA"];
                 $examen->fo_FECHA_EVALUACION_ORINA = $now5;
                 $examen->fo_RESULTADO_ORINA = $r["RESULTADO_ORINA"];
                 $examen->fo_OBSERVACION_ORINA = $r["OBSERVACION_ORINA"];
                 $examen->fo_CONCLUSION = $r["CONCLUSION"];
                             
                
            
     
                 $examen->save();
     
                 $affected = DB::table('cargas')
                   ->where('id', session()->get('idCargas'))
                   ->update(['realizado' => 1]);
                   return redirect()->action('PruebasController@pico');
             }
             else{

                 $idPaciente = DB::table('pacientes')
                 ->where('nroSap' , session()->get('nroSap'))
                 ->first()->id;
                 


                 $examen = new Examen();
         
                 $examen->users_id = Auth::id();
                 $examen->pacientes_id = $idPaciente;
                 $examen->agentes_id = $carga->agentes_id;
                 $examen->cargas_id = $carga->id;
                 
                 $examen->fo_FECHA_EVALUACION_HEMOGRAMA = $now;
                 $examen->fo_RESULTADO_HEMOGRAMA = $r["RESULTADO_HEMOGRAMA"];
                 $examen->fo_OBSERVACION_HEMOGRAMA = $r["OBSERVACION_HEMOGRAMA"];
                 $examen->fo_FECHA_EVALUACION_BIOQUIMICO = $now2;
                 $examen->fo_RESULTADO_BIOQUIMICO = $r["RESULTADO_BIOQUIMICO"];
                 $examen->fo_OBSERVACION_BIOQUIMICO = $r["OBSERVACION_BIOQUIMICO"];
                 $examen->fo_FECHA_EVALUACION_TORAX = $now3;
                 
                 $examen->fo_RESULTADO_TORAX = $r["RESULTADO_TORAX"];
                 $examen->fo_OBSERVACION_TORAX = $r["OBSERVACION_TORAX"];
                 $examen->fo_FECHA_EVALUACION_CLINICA = $now4;
                 $examen->fo_RESULTADO_EVALUACION_CLINICA = $r["RESULTADO_EVALUACION_CLINICA"];
                 $examen->fo_OBSERVACION_EVALUACION_CLINICA = $r["OBSERVACION_EVALUACION_CLINICA"];
                 $examen->fo_FECHA_EVALUACION_ORINA = $now5;
                 $examen->fo_RESULTADO_ORINA = $r["RESULTADO_ORINA"];
                 $examen->fo_OBSERVACION_ORINA = $r["OBSERVACION_ORINA"];
                 $examen->fo_CONCLUSION = $r["CONCLUSION"];
                             
                                                           
                
                 $examen->save();
     
                 $affected = DB::table('cargas')
                   ->where('id', session()->get('idCargas'))
                   ->update(['realizado' => 1]);
                 
                   return redirect()->action('PruebasController@pico');


                
             }
            }

//////////////////////////////////////////////////////////////////oe
public function getExamenoe(Request $r){


    $fecha = $r["FECHA_EVALUACION_HEMOGRAMA"];
    $fecha2 = $r["FECHA_EVALUACION_BIOQUIMICO"];
    $fecha3 = $r["FECHA_EVALUACION_TORAX"];
    $fecha4 = $r["FECHA_EVALUACION_CLINICA"];
    $fecha5 = $r["FECHA_EVALUACION_ORINA"];
 
 //    $dt = Carbon::now(explode('/', $fecha)[0], explode('/', $fecha)[1], explode('/', $fecha)[2]);   
    $now = new DateTime(explode('-', $fecha)[2]."-".explode('-', $fecha)[1]."-".explode('-', $fecha)[0], new DateTimeZone('America/Santiago'));
    $now2 = new DateTime(explode('-', $fecha2)[2]."-".explode('-', $fecha2)[1]."-".explode('-', $fecha2)[0], new DateTimeZone('America/Santiago'));
    $now3 = new DateTime(explode('-', $fecha3)[2]."-".explode('-', $fecha3)[1]."-".explode('-', $fecha3)[0], new DateTimeZone('America/Santiago'));
    $now4 = new DateTime(explode('-', $fecha4)[2]."-".explode('-', $fecha4)[1]."-".explode('-', $fecha4)[0], new DateTimeZone('America/Santiago'));
    $now5 = new DateTime(explode('-', $fecha5)[2]."-".explode('-', $fecha5)[1]."-".explode('-', $fecha5)[0], new DateTimeZone('America/Santiago'));
    $existePaciente =  DB::table('pacientes')->where([
         'nroSap' => session()->get('nroSap')
     ])->get();

     $carga = new Cargas();      
     $paciente = new Paciente();   
     $idPaciente = 0; 

     $carga = DB::table('cargas')
     ->where('id', session()->get('idCargas'))
     ->get()[0];
             //paciente no existe en tabla local "pacientes"
             if( $existePaciente->count() == 0){

                 $paciente->nroSap = session()->get('nroSap');
                 $paciente->rut = $carga->rut;
                 $paciente->primerNombre = $carga->primerNombre;
                 $paciente->segundoNombre = $carga->segundoNombre;            
                 $paciente->primerApellido = $carga->primerApellido;
                 $paciente->segundoApellido = $carga->segundoApellido;
                 $paciente->cargo = $carga->cargo;
                 $paciente->gerencia = $carga->gerencia;
                 $paciente->fechaNacimiento = $carga->fechaNacimiento;
                 $paciente->sexo = $carga->sexo;
                 $paciente->save();
     
                 $idPaciente = $paciente->select('id')->where('nroSap', session()->get('nroSap'))->get()[0]->id;                    
                 $idUsuario = $id = Auth::id();
                 
                 $examen = new Examen();
                 
                 $examen->users_id = $idUsuario;
                 $examen->pacientes_id = $idPaciente;
                 $examen->agentes_id = $carga->agentes_id;

               
                 $examen->oe_FECHA_EVALUACION_HEMOGRAMA = $now;
                 $examen->oe_RESULTADO_HEMOGRAMA = $r["RESULTADO_HEMOGRAMA"];
                 $examen->oe_OBSERVACION_HEMOGRAMA = $r["OBSERVACION_HEMOGRAMA"];
                 $examen->oe_FECHA_EVALUACION_BIOQUIMICO = $now2;
                 $examen->oe_RESULTADO_BIOQUIMICO = $r["RESULTADO_BIOQUIMICO"];
                 $examen->oe_OBSERVACION_BIOQUIMICO = $r["OBSERVACION_BIOQUIMICO"];
                 $examen->oe_FECHA_EVALUACION_TORAX = $now3;
                 $examen->oe_RESULTADO_BIOQUIMICO = $r["RESULTADO_TORAX"];
                 $examen->oe_OBSERVACION_BIOQUIMICO = $r["OBSERVACION_TORAX"];
                 $examen->oe_FECHA_FECHA_EVALUACION_CLINICA = $now4;
                 $examen->oe_RESULTADO_EVALUACION_CLINICA = $r["RESULTADO_EVALUACION_CLINICA"];
                 $examen->oe_OBSERVACION_EVALUACION_CLINICA = $r["OBSERVACION_EVALUACION_CLINICA"];
                 $examen->oe_FECHA_FECHA_EVALUACION_ORINA = $now5;
                 $examen->oe_RESULTADO_ORINA = $r["RESULTADO_ORINA"];
                 $examen->oe_OBSERVACION_ORINA = $r["OBSERVACION_ORINA"];
                 $examen->oe_CONCLUSION = $r["CONCLUSION"];
                
            
     
                 $examen->save();
     
                 $affected = DB::table('cargas')
                   ->where('id', session()->get('idCargas'))
                   ->update(['realizado' => 1]);
                   return redirect()->action('PruebasController@pico');
             }
             else{

                 $idPaciente = DB::table('pacientes')
                 ->where('nroSap' , session()->get('nroSap'))
                 ->first()->id;
                 


                 $examen = new Examen();
         
                 $examen->users_id = Auth::id();
                 $examen->pacientes_id = $idPaciente;
                 $examen->agentes_id = $carga->agentes_id;
                 
                 $examen->oe_FECHA_EVALUACION_HEMOGRAMA = $now;
                 $examen->oe_RESULTADO_HEMOGRAMA = $r["RESULTADO_HEMOGRAMA"];
                 $examen->oe_OBSERVACION_HEMOGRAMA = $r["OBSERVACION_HEMOGRAMA"];
                 $examen->oe_FECHA_EVALUACION_BIOQUIMICO = $now2;
                 $examen->oe_RESULTADO_BIOQUIMICO = $r["RESULTADO_BIOQUIMICO"];
                 $examen->oe_OBSERVACION_BIOQUIMICO = $r["OBSERVACION_BIOQUIMICO"];
                 $examen->oe_FECHA_EVALUACION_TORAX = $now3;
                 $examen->oe_RESULTADO_BIOQUIMICO = $r["RESULTADO_TORAX"];
                 $examen->oe_OBSERVACION_BIOQUIMICO = $r["OBSERVACION_TORAX"];
                 $examen->oeEVALUACION_CLINICA = $now4;
                 $examen->oe_RESULTADO_EVALUACION_CLINICA = $r["RESULTADO_EVALUACION_CLINICA"];
                 $examen->oe_OBSERVACION_EVALUACION_CLINICA = $r["OBSERVACION_EVALUACION_CLINICA"];
                 $examen->oe_FECHA_FECHA_EVALUACION_ORINA = $now5;
                 $examen->oe_RESULTADO_ORINA = $r["RESULTADO_ORINA"];
                 $examen->oe_OBSERVACION_ORINA = $r["OBSERVACION_ORINA"];
                 $examen->oe_CONCLUSION = $r["CONCLUSION"];
                             
                                                           
                
                 $examen->save();
     
                 $affected = DB::table('cargas')
                   ->where('id', session()->get('idCargas'))
                   ->update(['realizado' => 1]);
                 
                   return redirect()->action('PruebasController@pico');
                
             }
            }
///////////////////////////////////////////////////// oel operador equipo liviano
public function getExamenoel(Request $r){


    // dd(session()->get('nroSap'));
    // dd( $id = Auth::id());

    $fecha = $r["FECHA_EXAMEN"];
   // $fecha2 = $r["FECHA_REEVALUACION"];
 //    $dt = Carbon::now(explode('/', $fecha)[0], explode('/', $fecha)[1], explode('/', $fecha)[2]);   
    $now = new DateTime(explode('-', $fecha)[2]."-".explode('-', $fecha)[1]."-".explode('-', $fecha)[0], new DateTimeZone('America/Santiago'));
    //$now2 = new DateTime(explode('-', $fecha2)[2]."-".explode('-', $fecha2)[1]."-".explode('-', $fecha2)[0], new DateTimeZone('America/Santiago'));
    
    $existePaciente =  DB::table('pacientes')->where([
         'nroSap' => session()->get('nroSap')
     ])->get();

     $carga = new Cargas();      
     $paciente = new Paciente();   
     $idPaciente = 0; 

     $carga = DB::table('cargas')
     ->where('id', session()->get('idCargas'))
     ->get()[0];
             //paciente no existe en tabla local "pacientes"
             if( $existePaciente->count() == 0){

                 $paciente->nroSap = session()->get('nroSap');
                 $paciente->rut = $carga->rut;
                 $paciente->primerNombre = $carga->primerNombre;
                 $paciente->segundoNombre = $carga->segundoNombre;            
                 $paciente->primerApellido = $carga->primerApellido;
                 $paciente->segundoApellido = $carga->segundoApellido;
                 $paciente->cargo = $carga->cargo;
                 $paciente->gerencia = $carga->gerencia;
                 $paciente->fechaNacimiento = $carga->fechaNacimiento;
                 $paciente->sexo = $carga->sexo;
                 $paciente->save();
     
                 $idPaciente = $paciente->select('id')->where('nroSap', session()->get('nroSap'))->get()[0]->id;                    
                 $idUsuario = $id = Auth::id();
                 
                 $examen = new Examen();
                 
                 $examen->users_id = $idUsuario;
                 $examen->pacientes_id = $idPaciente;
                 $examen->agentes_id = $carga->agentes_id;

               
                 $examen->oel_FECHA_EXAMEN = $now;
                 $examen->oel_EVALUACION = $r["EVALUACION"];
                 $examen->oel_OPTOMETRIA = $r["OPTOMETRIA"];
                 $examen->oel_ESCALA_EPWORTH = $r["ESCALA_EPWORTH"];
                 $examen->oel_FARMACOS = $r["FARMACOS"];
                 $examen->oel_ALCOHOL = $r["ALCOHOL"];
                 $examen->oel_DROGAS = $r["DROGAS"];
                 $examen->oel_PSICOSENSOTECNICO_RIGUROSO = $r["PSICOSENSOTECNICO_RIGUROSO"];
     
     
                 
            
     
                 $examen->save();
     
                 $affected = DB::table('cargas')
                   ->where('id', session()->get('idCargas'))
                   ->update(['realizado' => 1]);
                   return redirect()->action('PruebasController@pico');
             }
             else{

                 $idPaciente = DB::table('pacientes')
                 ->where('nroSap' , session()->get('nroSap'))
                 ->first()->id;
                 


                 $examen = new Examen();
         
                 $examen->users_id = Auth::id();
                 $examen->pacientes_id = $idPaciente;
                 $examen->agentes_id = $carga->agentes_id;
                 $examen->oel_FECHA_EXAMEN = $now;
                 $examen->oel_EVALUACION = $r["EVALUACION"];
                 $examen->oel_OPTOMETRIA = $r["OPTOMETRIA"];
                 $examen->oel_ESCALA_EPWORTH = $r["ESCALA_EPWORTH"];
                 $examen->oel_FARMACOS = $r["FARMACOS"];
                 $examen->oel_ALCOHOL = $r["ALCOHOL"];
                 $examen->oel_DROGAS = $r["DROGAS"];
                 $examen->oel_PSICOSENSOTECNICO_RIGUROSO = $r["PSICOSENSOTECNICO_RIGUROSO"];
                             
                                                           
                
                 $examen->save();
     
                 $affected = DB::table('cargas')
                   ->where('id', session()->get('idCargas'))
                   ->update(['realizado' => 1]);
                 
                   return redirect()->action('PruebasController@pico');
                
             }
            }

/////////////////////////////////////////////////// OPERADOR EQUIPO PESADO OEP
public function getExamenoep(Request $r){


    // dd(session()->get('nroSap'));
    // dd( $id = Auth::id());

    $fecha = $r["FECHA_EVALUACION"];
    $fecha2 = $r["FECHA_REEVALUACION"];
 //    $dt = Carbon::now(explode('/', $fecha)[0], explode('/', $fecha)[1], explode('/', $fecha)[2]);   
    $now = new DateTime(explode('-', $fecha)[2]."-".explode('-', $fecha)[1]."-".explode('-', $fecha)[0], new DateTimeZone('America/Santiago'));
    $now2 = new DateTime(explode('-', $fecha2)[2]."-".explode('-', $fecha2)[1]."-".explode('-', $fecha2)[0], new DateTimeZone('America/Santiago'));
    
    $existePaciente =  DB::table('pacientes')->where([
         'nroSap' => session()->get('nroSap')
     ])->get();

     $carga = new Cargas();      
     $paciente = new Paciente();   
     $idPaciente = 0; 

     $carga = DB::table('cargas')
     ->where('id', session()->get('idCargas'))
     ->get()[0];
             //paciente no existe en tabla local "pacientes"
             if( $existePaciente->count() == 0){

                 $paciente->nroSap = session()->get('nroSap');
                 $paciente->rut = $carga->rut;
                 $paciente->primerNombre = $carga->primerNombre;
                 $paciente->segundoNombre = $carga->segundoNombre;            
                 $paciente->primerApellido = $carga->primerApellido;
                 $paciente->segundoApellido = $carga->segundoApellido;
                 $paciente->cargo = $carga->cargo;
                 $paciente->gerencia = $carga->gerencia;
                 $paciente->fechaNacimiento = $carga->fechaNacimiento;
                 $paciente->sexo = $carga->sexo;
                 $paciente->save();
     
                 $idPaciente = $paciente->select('id')->where('nroSap', session()->get('nroSap'))->get()[0]->id;                    
                 $idUsuario = $id = Auth::id();
                 
                 $examen = new Examen();
                 
                 $examen->users_id = $idUsuario;
                 $examen->pacientes_id = $idPaciente;
                 $examen->agentes_id = $carga->agentes_id;

               
                 $examen->oep_FECHA_EVALUACION = $now;
                 $examen->oep_ESCALA_EPWORTH= $r["ESCALA_EPWORTH"];
                 $examen->oep_CREATININA = $r["CREATININA"];
                 $examen->oep_OPTOMETRIA = $r["OPTOMETRIA"];
                 $examen->oep_PSICOSENSOTECNICO = $r["PSICOSENSOTECNICO"];
                 $examen->oep_CONCLUSION = $r["CONCLUSION"];
                 $examen->oep_OBSERVACION = $r["OBSERVACION"];
                 $examen->oep_FECHA_REEVALUACION = $now2;
                 $examen->oep_CONCLUSION2 = $r["CONCLUSION2"];
                 $examen->oep_OBSERVACION_REEVALUACION = $r["OBSERVACION_REEVALUACION"];
     
                
            
     
                 $examen->save();
     
                 $affected = DB::table('cargas')
                   ->where('id', session()->get('idCargas'))
                   ->update(['realizado' => 1]);
                   return redirect()->action('PruebasController@pico');
             }
             else{

                 $idPaciente = DB::table('pacientes')
                 ->where('nroSap' , session()->get('nroSap'))
                 ->first()->id;
                 


                 $examen = new Examen();
         
                 $examen->users_id = Auth::id();
                 $examen->pacientes_id = $idPaciente;
                 $examen->agentes_id = $carga->agentes_id;
                 $examen->oep_FECHA_EVALUACION = $now;
                 $examen->oep_ESCALA_EPWORTH= $r["ESCALA_EPWORTH"];
                 $examen->oep_CREATININA = $r["CREATININA"];
                 $examen->oep_OPTOMETRIA = $r["OPTOMETRIA"];
                 $examen->oep_PSICOSENSOTECNICO = $r["PSICOSENSOTECNICO"];
                 $examen->oep_CONCLUSION = $r["CONCLUSION"];
                 $examen->oep_OBSERVACION = $r["OBSERVACION"];
                 $examen->oep_FECHA_REEVALUACION = $now2;
                 $examen->oep_CONCLUSION2 = $r["CONCLUSION2"];
                 $examen->oep_OBSERVACION_REEVALUACION = $r["OBSERVACION_REEVALUACION"];
                                                           
                
                 $examen->save();
     
                 $affected = DB::table('cargas')
                   ->where('id', session()->get('idCargas'))
                   ->update(['realizado' => 1]);
                 
                   return redirect()->action('PruebasController@pico');
                
             }
            }
/////////////////////////////////////////////////////// OPERADOR SALA DE CONTROL OSC
public function getExamenosc(Request $r){


    // dd(session()->get('nroSap'));
    // dd( $id = Auth::id());

    $fecha = $r["FECHA_EVALUACION"];
    $fecha2 = $r["FECHA_REEVALUACION"];
 //    $dt = Carbon::now(explode('/', $fecha)[0], explode('/', $fecha)[1], explode('/', $fecha)[2]);   
    $now = new DateTime(explode('-', $fecha)[2]."-".explode('-', $fecha)[1]."-".explode('-', $fecha)[0], new DateTimeZone('America/Santiago'));
    $now2 = new DateTime(explode('-', $fecha2)[2]."-".explode('-', $fecha2)[1]."-".explode('-', $fecha2)[0], new DateTimeZone('America/Santiago'));
    
    $existePaciente =  DB::table('pacientes')->where([
         'nroSap' => session()->get('nroSap')
     ])->get();

     $carga = new Cargas();      
     $paciente = new Paciente();   
     $idPaciente = 0; 

     $carga = DB::table('cargas')
     ->where('id', session()->get('idCargas'))
     ->get()[0];
             //paciente no existe en tabla local "pacientes"
             if( $existePaciente->count() == 0){

                 $paciente->nroSap = session()->get('nroSap');
                 $paciente->rut = $carga->rut;
                 $paciente->primerNombre = $carga->primerNombre;
                 $paciente->segundoNombre = $carga->segundoNombre;            
                 $paciente->primerApellido = $carga->primerApellido;
                 $paciente->segundoApellido = $carga->segundoApellido;
                 $paciente->cargo = $carga->cargo;
                 $paciente->gerencia = $carga->gerencia;
                 $paciente->fechaNacimiento = $carga->fechaNacimiento;
                 $paciente->sexo = $carga->sexo;
                 $paciente->save();
     
                 $idPaciente = $paciente->select('id')->where('nroSap', session()->get('nroSap'))->get()[0]->id;                    
                 $idUsuario = $id = Auth::id();
                 
                 $examen = new Examen();
                 
                 $examen->users_id = $idUsuario;
                 $examen->pacientes_id = $idPaciente;
                 $examen->agentes_id = $carga->agentes_id;

               
                 $examen->osc_FECHA_EVALUACION = $now;
                 $examen->osc_OPTOMETRIA = $r["OPTOMETRIA"];
                 $examen->osc_PSICOSENSOTECNICO = $r["PSICOSENSOTECNICO"];
                 $examen->osc_CONCLUSION = $r["CONCLUSION"];
                 $examen->osc_OBSERVACION = $r["OBSERVACION"];
                 $examen->osc_aa_FECHA_REEVALUACION = $now2;
                 $examen->osc_CONCLUSION_REEVALUACION = $r["CONCLUSION_REEVALUACION"];
                 $examen->osc_OBSERVACION_REEVALUACION = $r["OBSERVACION_REEVALUACION"];
                 
     
     
                
            
     
                 $examen->save();
     
                 $affected = DB::table('cargas')
                   ->where('id', session()->get('idCargas'))
                   ->update(['realizado' => 1]);
                   return redirect()->action('PruebasController@pico');
             }
             else{

                 $idPaciente = DB::table('pacientes')
                 ->where('nroSap' , session()->get('nroSap'))
                 ->first()->id;
                 


                 $examen = new Examen();
         
                 $examen->users_id = Auth::id();
                 $examen->pacientes_id = $idPaciente;
                 $examen->agentes_id = $carga->agentes_id;
                 $examen->osc_FECHA_EVALUACION = $now;
                 $examen->osc_OPTOMETRIA = $r["OPTOMETRIA"];
                 $examen->osc_PSICOSENSOTECNICO = $r["PSICOSENSOTECNICO"];
                 $examen->osc_CONCLUSION = $r["CONCLUSION"];
                 $examen->osc_OBSERVACION = $r["OBSERVACION"];
                 $examen->osc_aa_FECHA_REEVALUACION = $now2;
                 $examen->osc_CONCLUSION_REEVALUACION = $r["CONCLUSION_REEVALUACION"];
                 $examen->osc_OBSERVACION_REEVALUACION = $r["OBSERVACION_REEVALUACION"];
                             
                                                           
                
                 $examen->save();
     
                 $affected = DB::table('cargas')
                   ->where('id', session()->get('idCargas'))
                   ->update(['realizado' => 1]);
                 
                   return redirect()->action('PruebasController@pico');
                
             }
            }

//////////////////////////////////////////////////////////////////// PLOMO
public function getExamenplomo(Request $r){


    // dd(session()->get('nroSap'));
    // dd( $id = Auth::id());

    $fecha = $r["FECHA_MUESTRA"];
    //$fecha2 = $r["FECHA_REEVALUACION"];
 //    $dt = Carbon::now(explode('/', $fecha)[0], explode('/', $fecha)[1], explode('/', $fecha)[2]);   
    $now = new DateTime(explode('-', $fecha)[2]."-".explode('-', $fecha)[1]."-".explode('-', $fecha)[0], new DateTimeZone('America/Santiago'));
    //$now2 = new DateTime(explode('-', $fecha2)[2]."-".explode('-', $fecha2)[1]."-".explode('-', $fecha2)[0], new DateTimeZone('America/Santiago'));
    
    $existePaciente =  DB::table('pacientes')->where([
         'nroSap' => session()->get('nroSap')
     ])->get();

     $carga = new Cargas();      
     $paciente = new Paciente();   
     $idPaciente = 0; 

     $carga = DB::table('cargas')
     ->where('id', session()->get('idCargas'))
     ->get()[0];
             //paciente no existe en tabla local "pacientes"
             if( $existePaciente->count() == 0){

                 $paciente->nroSap = session()->get('nroSap');
                 $paciente->rut = $carga->rut;
                 $paciente->primerNombre = $carga->primerNombre;
                 $paciente->segundoNombre = $carga->segundoNombre;            
                 $paciente->primerApellido = $carga->primerApellido;
                 $paciente->segundoApellido = $carga->segundoApellido;
                 $paciente->cargo = $carga->cargo;
                 $paciente->gerencia = $carga->gerencia;
                 $paciente->fechaNacimiento = $carga->fechaNacimiento;
                 $paciente->sexo = $carga->sexo;
                 $paciente->save();
     
                 $idPaciente = $paciente->select('id')->where('nroSap', session()->get('nroSap'))->get()[0]->id;                    
                 $idUsuario = $id = Auth::id();
                 
                 $examen = new Examen();
                 
                 $examen->users_id = $idUsuario;
                 $examen->pacientes_id = $idPaciente;
                 $examen->agentes_id = $carga->agentes_id;

               
                 $examen->plomo_FECHA_MUESTRA = $now;
                 $examen->plomo_COD_INFORME = $r["COD_INFORME"];
                 $examen->plomo_UG_100ML = $r["UG_100ML"];
                 $examen->plomo_RESULTADO = $r["RESULTADO"];
                 
                 
     
     
                
            
     
                 $examen->save();
     
                 $affected = DB::table('cargas')
                   ->where('id', session()->get('idCargas'))
                   ->update(['realizado' => 1]);
                   return redirect()->action('PruebasController@pico');
             }
             else{

                 $idPaciente = DB::table('pacientes')
                 ->where('nroSap' , session()->get('nroSap'))
                 ->first()->id;
                 


                 $examen = new Examen();
         
                 $examen->users_id = Auth::id();
                 $examen->pacientes_id = $idPaciente;
                 $examen->agentes_id = $carga->agentes_id;
                 $examen->plomo_FECHA_MUESTRA = $now;
                 $examen->plomo_COD_INFORME = $r["COD_INFORME"];
                 $examen->plomo_UG_100ML = $r["UG_100ML"];
                 $examen->plomo_RESULTADO = $r["RESULTADO"];
                             
                                                           
                
                 $examen->save();
     
                 $affected = DB::table('cargas')
                   ->where('id', session()->get('idCargas'))
                   ->update(['realizado' => 1]);
                 
                   return redirect()->action('PruebasController@pico');
                
             }
            }
/////////////////////////////////////////////// RAD 1
public function getExamenrad1(Request $r){


    // dd(session()->get('nroSap'));
    // dd( $id = Auth::id());

    $fecha = $r["FECHA_EVALUACION"];
    //$fecha2 = $r["FECHA_REEVALUACION"];
 //    $dt = Carbon::now(explode('/', $fecha)[0], explode('/', $fecha)[1], explode('/', $fecha)[2]);   
    $now = new DateTime(explode('-', $fecha)[2]."-".explode('-', $fecha)[1]."-".explode('-', $fecha)[0], new DateTimeZone('America/Santiago'));
    //$now2 = new DateTime(explode('-', $fecha2)[2]."-".explode('-', $fecha2)[1]."-".explode('-', $fecha2)[0], new DateTimeZone('America/Santiago'));
    
    $existePaciente =  DB::table('pacientes')->where([
         'nroSap' => session()->get('nroSap')
     ])->get();

     $carga = new Cargas();      
     $paciente = new Paciente();   
     $idPaciente = 0; 

     $carga = DB::table('cargas')
     ->where('id', session()->get('idCargas'))
     ->get()[0];
             //paciente no existe en tabla local "pacientes"
             if( $existePaciente->count() == 0){

                 $paciente->nroSap = session()->get('nroSap');
                 $paciente->rut = $carga->rut;
                 $paciente->primerNombre = $carga->primerNombre;
                 $paciente->segundoNombre = $carga->segundoNombre;            
                 $paciente->primerApellido = $carga->primerApellido;
                 $paciente->segundoApellido = $carga->segundoApellido;
                 $paciente->cargo = $carga->cargo;
                 $paciente->gerencia = $carga->gerencia;
                 $paciente->fechaNacimiento = $carga->fechaNacimiento;
                 $paciente->sexo = $carga->sexo;
                 $paciente->save();
     
                 $idPaciente = $paciente->select('id')->where('nroSap', session()->get('nroSap'))->get()[0]->id;                    
                 $idUsuario = $id = Auth::id();
                 
                 $examen = new Examen();
                 
                 $examen->users_id = $idUsuario;
                 $examen->pacientes_id = $idPaciente;
                 $examen->agentes_id = $carga->agentes_id;

               
                 $examen->rad1_FECHA_EVALUACION = $now;
                 $examen->rad1_RESULTADO_HEMOGRAMA = $r["RESULTADO_HEMOGRAMA"];
                 $examen->rad1_ESPIROMETRIA = $r["ESPIROMETRIA"];
                 $examen->rad1_TEST_VISUAL = $r["TEST_VISUAL"];
                 $examen->rad1_PRUEBAS_HEPATICAS = $r["PRUEBAS_HEPATICAS"];
                 $examen->rad1_PRUEBAS_TIROIDEAS = $r["PRUEBAS_TIROIDEAS"];
                 $examen->rad1_CONCLUSION = $r["CONCLUSION"];
                 $examen->rad1_OBSERVACION = $r["OBSERVACION"];
                 
     
     
                
            
     
                 $examen->save();
     
                 $affected = DB::table('cargas')
                   ->where('id', session()->get('idCargas'))
                   ->update(['realizado' => 1]);
                   return redirect()->action('PruebasController@pico');
             }
             else{

                 $idPaciente = DB::table('pacientes')
                 ->where('nroSap' , session()->get('nroSap'))
                 ->first()->id;
                 


                 $examen = new Examen();
         
                 $examen->users_id = Auth::id();
                 $examen->pacientes_id = $idPaciente;
                 $examen->agentes_id = $carga->agentes_id;
                 $examen->rad1_FECHA_EVALUACION = $now;
                 $examen->rad1_RESULTADO_HEMOGRAMA = $r["RESULTADO_HEMOGRAMA"];
                 $examen->rad1_ESPIROMETRIA = $r["ESPIROMETRIA"];
                 $examen->rad1_TEST_VISUAL = $r["TEST_VISUAL"];
                 $examen->rad1_PRUEBAS_HEPATICAS = $r["PRUEBAS_HEPATICAS"];
                 $examen->rad1_PRUEBAS_TIROIDEAS = $r["PRUEBAS_TIROIDEAS"];
                 $examen->rad1_CONCLUSION = $r["CONCLUSION"];
                 $examen->rad1_OBSERVACION = $r["OBSERVACION"];
                             
                                                           
                
                 $examen->save();
     
                 $affected = DB::table('cargas')
                   ->where('id', session()->get('idCargas'))
                   ->update(['realizado' => 1]);
                 
                   return redirect()->action('PruebasController@pico');
                
             }
            }

//////////////////////////////////////////////////////// RAD 2 Y 3 IONIZANTES
public function getExamenrad2y3(Request $r){


    // dd(session()->get('nroSap'));
    // dd( $id = Auth::id());

    $fecha = $r["FECHA_EVALUACION"];
   // $fecha2 = $r["FECHA_REEVALUACION"];
 //    $dt = Carbon::now(explode('/', $fecha)[0], explode('/', $fecha)[1], explode('/', $fecha)[2]);   
    $now = new DateTime(explode('-', $fecha)[2]."-".explode('-', $fecha)[1]."-".explode('-', $fecha)[0], new DateTimeZone('America/Santiago'));
  //  $now2 = new DateTime(explode('-', $fecha2)[2]."-".explode('-', $fecha2)[1]."-".explode('-', $fecha2)[0], new DateTimeZone('America/Santiago'));
    
    $existePaciente =  DB::table('pacientes')->where([
         'nroSap' => session()->get('nroSap')
     ])->get();

     $carga = new Cargas();      
     $paciente = new Paciente();   
     $idPaciente = 0; 

     $carga = DB::table('cargas')
     ->where('id', session()->get('idCargas'))
     ->get()[0];
             //paciente no existe en tabla local "pacientes"
             if( $existePaciente->count() == 0){

                 $paciente->nroSap = session()->get('nroSap');
                 $paciente->rut = $carga->rut;
                 $paciente->primerNombre = $carga->primerNombre;
                 $paciente->segundoNombre = $carga->segundoNombre;            
                 $paciente->primerApellido = $carga->primerApellido;
                 $paciente->segundoApellido = $carga->segundoApellido;
                 $paciente->cargo = $carga->cargo;
                 $paciente->gerencia = $carga->gerencia;
                 $paciente->fechaNacimiento = $carga->fechaNacimiento;
                 $paciente->sexo = $carga->sexo;
                 $paciente->save();
     
                 $idPaciente = $paciente->select('id')->where('nroSap', session()->get('nroSap'))->get()[0]->id;                    
                 $idUsuario = $id = Auth::id();
                 
                 $examen = new Examen();
                 
                 $examen->users_id = $idUsuario;
                 $examen->pacientes_id = $idPaciente;
                 $examen->agentes_id = $carga->agentes_id;

               
                 $examen->rad2y3_FECHA_EVALUACION = $now;
                 $examen->rad2y3_RESULTADO_HEMOGRAMA = $r["RESULTADO_HEMOGRAMA"];
                 $examen->rad2y3_CONCLUSION = $r["CONCLUSION"];
                 $examen->rad2y3_OBSERVACION = $r["OBSERVACION"];
                 
                 
     
     
                
            
     
                 $examen->save();
     
                 $affected = DB::table('cargas')
                   ->where('id', session()->get('idCargas'))
                   ->update(['realizado' => 1]);
                   return redirect()->action('PruebasController@pico');
             }
             else{

                 $idPaciente = DB::table('pacientes')
                 ->where('nroSap' , session()->get('nroSap'))
                 ->first()->id;
                 


                 $examen = new Examen();
         
                 $examen->users_id = Auth::id();
                 $examen->pacientes_id = $idPaciente;
                 $examen->agentes_id = $carga->agentes_id;
                 $examen->rad2y3_FECHA_EVALUACION = $now;
                 $examen->rad2y3_RESULTADO_HEMOGRAMA = $r["RESULTADO_HEMOGRAMA"];
                 $examen->rad2y3_CONCLUSION = $r["CONCLUSION"];
                 $examen->rad2y3_OBSERVACION = $r["OBSERVACION"];
                             
                                                           
                
                 $examen->save();
     
                 $affected = DB::table('cargas')
                   ->where('id', session()->get('idCargas'))
                   ->update(['realizado' => 1]);
                 
                   return redirect()->action('PruebasController@pico');
                
             }
            }

////////////////////////////////////////////////////////////////RUIDO
public function getExamenruido(Request $r){


    // dd(session()->get('nroSap'));
    // dd( $id = Auth::id());

    $fecha = $r["fechaExamen"];
    //$fecha2 = $r["FECHA_REEVALUACION"];
 //    $dt = Carbon::now(explode('/', $fecha)[0], explode('/', $fecha)[1], explode('/', $fecha)[2]);   
    $now = new DateTime(explode('-', $fecha)[2]."-".explode('-', $fecha)[1]."-".explode('-', $fecha)[0], new DateTimeZone('America/Santiago'));
    //$now2 = new DateTime(explode('-', $fecha2)[2]."-".explode('-', $fecha2)[1]."-".explode('-', $fecha2)[0], new DateTimeZone('America/Santiago'));
    
    $existePaciente =  DB::table('pacientes')->where([
         'nroSap' => session()->get('nroSap')
     ])->get();

     $carga = new Cargas();      
     $paciente = new Paciente();   
     $idPaciente = 0; 

     $carga = DB::table('cargas')
     ->where('id', session()->get('idCargas'))
     ->get()[0];
             //paciente no existe en tabla local "pacientes"
             if( $existePaciente->count() == 0){

                 $paciente->nroSap = session()->get('nroSap');
                 $paciente->rut = $carga->rut;
                 $paciente->primerNombre = $carga->primerNombre;
                 $paciente->segundoNombre = $carga->segundoNombre;            
                 $paciente->primerApellido = $carga->primerApellido;
                 $paciente->segundoApellido = $carga->segundoApellido;
                 $paciente->cargo = $carga->cargo;
                 $paciente->gerencia = $carga->gerencia;
                 $paciente->fechaNacimiento = $carga->fechaNacimiento;
                 $paciente->sexo = $carga->sexo;
                 $paciente->save();
     
                 $idPaciente = $paciente->select('id')->where('nroSap', session()->get('nroSap'))->get()[0]->id;                    
                 $idUsuario = $id = Auth::id();
                 
                 $examen = new Examen();
                 
                 $examen->users_id = $idUsuario;
                 $examen->pacientes_id = $idPaciente;
                 $examen->agentes_id = $carga->agentes_id;

               
                 $examen->ruido_fechaExamen = $now;
                 $examen->ruido_oido_derecho_1 = $r["oido_derecho_1"];
                 $examen->ruido_oido_derecho_2 = $r["oido_derecho_2"];
                 $examen->ruido_oido_derecho_3 = $r["oido_derecho_3"];
                 $examen->ruido_oido_derecho_4 = $r["oido_derecho_4"];
                 $examen->ruido_oido_derecho_6 = $r["oido_derecho_6"];
                 $examen->ruido_oido_derecho_8 = $r["oido_derecho_8"];
                 $examen->ruido_oido_derecho_dano_aud = $r["oido_derecho_dano_aud"];
                 $examen->ruido_oido_derecho_prom_1_6 = $r["oido_derecho_prom_1_6"];
                 $examen->ruido_oido_izquierdo_1 = $r["oido_izquierdo_1"];
                 $examen->ruido_oido_izquierdo_2 = $r["oido_izquierdo_2"];
                 $examen->ruido_oido_izquierdo_3 = $r["oido_izquierdo_3"];
                 $examen->ruido_oido_izquierdo_4 = $r["oido_izquierdo_4"];
                 $examen->ruido_oido_izquierdo_6 = $r["oido_izquierdo_6"];
                 $examen->ruido_oido_izquierdo_8 = $r["oido_izquierdo_8"];
                 $examen->ruido_oido_izquierdo_dano_aud = $r["oido_izquierdo_dano_aud"];
                 $examen->ruido_oido_izquierdo_prom_1_6 = $r["oido_izquierdo_prom_1_6"];
                 $examen->ruido_PORCENTAJE_INCAPACIDAD = $r["PORCENTAJE_INCAPACIDAD"];
                 $examen->ruido_AUDIO_CONFIRMACION = $r["AUDIO_CONFIRMACION"];
                 $examen->ruido_OBSERVACION_MEDICA_RIESGO = $r["OBSERVACION_MEDICA_RIESGO"];
                 $examen->ruido_OBSERVACION_MEDICA = $r["OBSERVACION_MEDICA"];
     
                 $examen->save();
     
                 $affected = DB::table('cargas')
                   ->where('id', session()->get('idCargas'))
                   ->update(['realizado' => 1]);
                   return redirect()->action('PruebasController@pico');
             }
             else{

                 $idPaciente = DB::table('pacientes')
                 ->where('nroSap' , session()->get('nroSap'))
                 ->first()->id;
                 


                 $examen = new Examen();
         
                 $examen->users_id = Auth::id();
                 $examen->pacientes_id = $idPaciente;
                 $examen->agentes_id = $carga->agentes_id;
                 $examen->ruido_fechaExamen = $now;
                 $examen->ruido_oido_derecho_1 = $r["oido_derecho_1"];
                 $examen->ruido_oido_derecho_2 = $r["oido_derecho_2"];
                 $examen->ruido_oido_derecho_3 = $r["oido_derecho_3"];
                 $examen->ruido_oido_derecho_4 = $r["oido_derecho_4"];
                 $examen->ruido_oido_derecho_6 = $r["oido_derecho_6"];
                 $examen->ruido_oido_derecho_8 = $r["oido_derecho_8"];
                 $examen->ruido_oido_derecho_dano_aud = $r["oido_derecho_dano_aud"];
                 $examen->ruido_oido_derecho_prom_1_6 = $r["oido_derecho_prom_1_6"];
                 $examen->ruido_oido_izquierdo_1 = $r["oido_izquierdo_1"];
                 $examen->ruido_oido_izquierdo_2 = $r["oido_izquierdo_2"];
                 $examen->ruido_oido_izquierdo_3 = $r["oido_izquierdo_3"];
                 $examen->ruido_oido_izquierdo_4 = $r["oido_izquierdo_4"];
                 $examen->ruido_oido_izquierdo_6 = $r["oido_izquierdo_6"];
                 $examen->ruido_oido_izquierdo_8 = $r["oido_izquierdo_8"];
                 $examen->ruido_oido_izquierdo_dano_aud = $r["oido_izquierdo_dano_aud"];
                 $examen->ruido_oido_izquierdo_prom_1_6 = $r["oido_izquierdo_prom_1_6"];
                 $examen->ruido_PORCENTAJE_INCAPACIDAD = $r["PORCENTAJE_INCAPACIDAD"];
                 $examen->ruido_AUDIO_CONFIRMACION = $r["AUDIO_CONFIRMACION"];
                 $examen->ruido_OBSERVACION_MEDICA_RIESGO = $r["OBSERVACION_MEDICA_RIESGO"];
                 $examen->ruido_OBSERVACION_MEDICA = $r["OBSERVACION_MEDICA"];
                             
                                                           
                
                 $examen->save();
     
                 $affected = DB::table('cargas')
                   ->where('id', session()->get('idCargas'))
                   ->update(['realizado' => 1]);
                 
                   return redirect()->action('PruebasController@pico');
                
             }
            }

//////////////////////////////////////////////////////////////// silice
public function getExamensilice(Request $r){


    // dd(session()->get('nroSap'));
    // dd( $id = Auth::id());

    $fecha = $r["FECHA_EVALUACION"];
   // $fecha2 = $r["FECHA_REEVALUACION"];
 //    $dt = Carbon::now(explode('/', $fecha)[0], explode('/', $fecha)[1], explode('/', $fecha)[2]);   
    $now = new DateTime(explode('-', $fecha)[2]."-".explode('-', $fecha)[1]."-".explode('-', $fecha)[0], new DateTimeZone('America/Santiago'));
   // $now2 = new DateTime(explode('-', $fecha2)[2]."-".explode('-', $fecha2)[1]."-".explode('-', $fecha2)[0], new DateTimeZone('America/Santiago'));
    
    $existePaciente =  DB::table('pacientes')->where([
         'nroSap' => session()->get('nroSap')
     ])->get();

     $carga = new Cargas();      
     $paciente = new Paciente();   
     $idPaciente = 0; 

     $carga = DB::table('cargas')
     ->where('id', session()->get('idCargas'))
     ->get()[0];
             //paciente no existe en tabla local "pacientes"
             if( $existePaciente->count() == 0){

                 $paciente->nroSap = session()->get('nroSap');
                 $paciente->rut = $carga->rut;
                 $paciente->primerNombre = $carga->primerNombre;
                 $paciente->segundoNombre = $carga->segundoNombre;            
                 $paciente->primerApellido = $carga->primerApellido;
                 $paciente->segundoApellido = $carga->segundoApellido;
                 $paciente->cargo = $carga->cargo;
                 $paciente->gerencia = $carga->gerencia;
                 $paciente->fechaNacimiento = $carga->fechaNacimiento;
                 $paciente->sexo = $carga->sexo;
                 $paciente->save();
     
                 $idPaciente = $paciente->select('id')->where('nroSap', session()->get('nroSap'))->get()[0]->id;                    
                 $idUsuario = $id = Auth::id();
                 
                 $examen = new Examen();
                 
                 $examen->users_id = $idUsuario;
                 $examen->pacientes_id = $idPaciente;
                 $examen->agentes_id = $carga->agentes_id;

               
                 $examen->silice_FECHA_EVALUACION = $now;
                 $examen->silice_RESULTADO_RX = $r["RESULTADO_RX"];
                 $examen->silice_OBSERVACIONES = $r["OBSERVACIONES"];
                 $examen->silice_ANTECEDENTES_PATOLOGIAS = $r["ANTECEDENTES_PATOLOGIAS"];
                 $examen->silice_SINTOMAS_RESPIRATORIAS = $r["SINTOMAS_RESPIRATORIAS"];
                 
                 $examen->silice_OBSERVACIONES_2 = $r["OBSERVACIONES_2"];
                 $examen->silice_DECLARACION_SALUD = $r["DECLARACION_SALUD"];                         
                 $examen->save();
     
                 $affected = DB::table('cargas')
                   ->where('id', session()->get('idCargas'))
                   ->update(['realizado' => 1]);
                   return redirect()->action('PruebasController@pico');
             }
             else{

                 $idPaciente = DB::table('pacientes')
                 ->where('nroSap' , session()->get('nroSap'))
                 ->first()->id;
                 


                 $examen = new Examen();
         
                 $examen->users_id = Auth::id();
                 $examen->pacientes_id = $idPaciente;
                 $examen->agentes_id = $carga->agentes_id;
                 $examen->silice_FECHA_EVALUACION = $now;
                 $examen->silice_RESULTADO_RX = $r["RESULTADO_RX"];
                 $examen->silice_OBSERVACIONES = $r["OBSERVACIONES"];
                 $examen->silice_ANTECEDENTES_PATOLOGIAS = $r["ANTECEDENTES_PATOLOGIAS"];
                 $examen->silice_SINTOMAS_RESPIRATORIAS = $r["SINTOMAS_RESPIRATORIAS"];
                 
                 $examen->silice_OBSERVACIONES_2 = $r["OBSERVACIONES_2"];
                 $examen->silice_DECLARACION_SALUD = $r["DECLARACION_SALUD"];           
                                                           
                
                 $examen->save();
     
                 $affected = DB::table('cargas')
                   ->where('id', session()->get('idCargas'))
                   ->update(['realizado' => 1]);
                 
                   return redirect()->action('PruebasController@pico');
                
             }
            }

/////////////////////////////////////////////////////////////  so2

public function getExamenso2(Request $r){

    $fecha = $r["FECHA_FLUJO1"]; 
    $fecha2 = $r["FECHA_FLUJO2"];
    $fecha3 = $r["FECHA_ENCUESTA"];
 //    $dt = Carbon::now(explode('/', $fecha)[0], explode('/', $fecha)[1], explode('/', $fecha)[2]);   
    $now = new DateTime(explode('-', $fecha)[2]."-".explode('-', $fecha)[1]."-".explode('-', $fecha)[0], new DateTimeZone('America/Santiago'));
    $now2 = new DateTime(explode('-', $fecha2)[2]."-".explode('-', $fecha2)[1]."-".explode('-', $fecha2)[0], new DateTimeZone('America/Santiago'));
    $now3 = new DateTime(explode('-', $fecha3)[2]."-".explode('-', $fecha3)[1]."-".explode('-', $fecha3)[0], new DateTimeZone('America/Santiago'));
    $existePaciente =  DB::table('pacientes')->where([
         'nroSap' => session()->get('nrSap')
     ])->get();

     $carga = new Cargas();      
     $paciente = new Paciente();   
     $idPaciente = 0; 

     $carga = DB::table('cargas')
     ->where('id', session()->get('idCargas'))
     ->get()[0];
             //paciente no existe en tabla local "pacientes"
             if( $existePaciente->count() == 0){

                 $paciente->nroSap = session()->get('nroSap');
                 $paciente->rut = $carga->rut;
                 $paciente->primerNombre = $carga->primerNombre;
                 $paciente->segundoNombre = $carga->segundoNombre;            
                 $paciente->primerApellido = $carga->primerApellido;
                 $paciente->segundoApellido = $carga->segundoApellido;
                 $paciente->cargo = $carga->cargo;
                 $paciente->gerencia = $carga->gerencia;
                 $paciente->fechaNacimiento = $carga->fechaNacimiento;
                 $paciente->sexo = $carga->sexo;
                 $paciente->save();
     
                 $idPaciente = $paciente->select('id')->where('nroSap', session()->get('nroSap'))->get()[0]->id;                    
                 $idUsuario = $id = Auth::id();
                 
                 $examen = new Examen();
                 
                 
                 $examen->users_id = $idUsuario;
                 $examen->pacientes_id = $idPaciente;
                 $examen->agentes_id = $carga->agentes_id;

                 $examen->so2_FECHA_FLUJO1 = $now;
                 $examen->so2_PEF_OBS1 = $r["PEF_OBS1"];
                 $examen->so2_PEF_TEORICO1 = $r["PEF_TEORICO1"];
                 $examen->so2_PORCETAJE_FLUJO1 = $r["PORCETAJE_FLUJO1"];
                 $examen->so2_ESTADO = $r["ESTADO"];
                 $examen->so2_FECHA_FLUJO2 = $now2;
                 $examen->so2_PEF_OBS2 = $r["PEF_OBS2"];
                 $examen->so2_PEF_TEORICO2 = $r["PEF_TEORICO2"];
                 $examen->so2_PORCENTAJE_FLUJO2 = $r["PORCENTAJE_FLUJO2"];
                 $examen->so2_ESTADO_2 = $r["ESTADO_2"];
                 $examen->so2_VARIABILIDAD = $r["VARIABILIDAD"];
                 $examen->so2_CONCLUSION_FLUJO = $r["CONCLUSION_FLUJO"];
                 $examen->so2_FECHA_ENCUESTA = $now3;
                 $examen->so2_CONCLUSION_ENCUESTA = $r["CONCLUSION_ENCUESTA"];
                 $examen->so2_CONCLUSION_FINAL = $r["CONCLUSION_FINAL"];
                 
                 $examen->save();
     
                 $affected = DB::table('cargas')
                   ->where('id', session()->get('idCargas'))
                   ->update(['realizado' => 1]);
                   return redirect()->action('PruebasController@pico');
             }
             else{

                 $idPaciente = DB::table('pacientes')
                 ->where('nroSap' , session()->get('nroSap'))
                 ->first()->id;
                 
                 $examen = new Examen();
                 
                 $examen->users_id = $idUsuario;
                 $examen->pacientes_id = $idPaciente;
                 $examen->agentes_id = $carga->agentes_id;

                 $examen->so2_FECHA_FLUJO1 = $now;
                 $examen->so2_PEF_OBS1 = $r["PEF_OBS1"];
                 $examen->so2_PEF_TEORICO1 = $r["PEF_TEORICO1"];
                 $examen->so2_PORCETAJE_FLUJO1 = $r["PORCETAJE_FLUJO1"];
                 $examen->so2_ESTADO = $r["ESTADO"];
                 $examen->so2_FECHA_FLUJO2 = $now2;
                 $examen->so2_PEF_OBS2 = $r["PEF_OBS2"];
                 $examen->so2_PEF_TEORICO2 = $r["PEF_TEORICO2"];
                 $examen->so2_PORCENTAJE_FLUJO2 = $r["PORCENTAJE_FLUJO2"];
                 $examen->so2_ESTADO_2 = $r["ESTADO_2"];
                 $examen->so2_VARIABILIDAD = $r["VARIABILIDAD"];
                 $examen->so2_CONCLUSION_FLUJO = $r["CONCLUSION_FLUJO"];
                 $examen->so2_FECHA_ENCUESTA = $now3;
                 $examen->so2_CONCLUSION_ENCUESTA = $r["CONCLUSION_ENCUESTA"];
                 $examen->so2_CONCLUSION_FINAL = $r["CONCLUSION_FINAL"];

                 $examen->save();
     
                 $affected = DB::table('cargas')
                   ->where('id', session()->get('idCargas'))
                   ->update(['realizado' => 1]);
                 
                   return redirect()->action('PruebasController@pico');
   
    }
}


  public function getEncuestaResult(Request $r){

   // dd($r);

    $existePaciente =  DB::table('pacientes')->where([
      'nroSap' => session()->get('nroSap')
  ])->get();
    

      $carga = new Cargas();      
      $paciente = new Paciente();   
      $idPaciente = 0; 
      $idUsuario = $id = Auth::id();
      
      $carga = DB::table('cargas')
      ->where('id', session()->get('idCarga'))
      ->get()[0];

  
     
              //paciente no existe en tabla local "pacientes"
              if( $existePaciente->count() == 0){
    
                $paciente->nroSap = session()->get('nroSap');
                 $paciente->rut = $carga->rut;
                 $paciente->primerNombre = $carga->primerNombre;
                 $paciente->segundoNombre = $carga->segundoNombre;            
                 $paciente->primerApellido = $carga->primerApellido;
                 $paciente->segundoApellido = $carga->segundoApellido;
                 $paciente->cargo = $carga->cargo;
                 $paciente->gerencia = $carga->gerencia;
                 $paciente->fechaNacimiento = $carga->fechaNacimiento;
                 $paciente->sexo = $carga->sexo;
                 $paciente->save();
     
                 $idPaciente = $paciente->select('id')->where('nroSap', session()->get('nroSap'))->get()[0]->id;                    
                 
              }
              else{

                $idPaciente = DB::table('pacientes')
                ->where('nroSap' , session()->get('nroSap'))
                ->first()->id;

              }


              if ($r->session()->get('idAgente') == 18) {
                
                $examen = new Examen();
        
                $examen->users_id = $idUsuario;
                $examen->pacientes_id = $idPaciente;
                $examen->agentes_id = 20;
                $examen->cargas_id = $carga->id;


                $examen->ENC_AS_R_HA  = $r["r_ha"];                                  
                $examen->ENC_AS_R_DM  = $r["r_dm"];
                $examen->ENC_AS_R_ER  = $r["r_er"];
                $examen->ENC_AS_H  = $r["r_h"];
                $examen->ENC_AS_PREG  = $r["r_preg1_as"];          
                $examen->ENC_AS_RESULT_EMPRESA  = $r["result_empresa"];
                $examen->ENC_AS_RESULT_PUESTOTRABAJO  = $r["result_puestotrabajo"];
                $examen->ENC_AS_RESULT_ORG  = $r["result_org"];
                
                $examen->ENC_AS_FECHA_INI1 = $now = new DateTime(explode('-', $r["fecha_ini1"])[2]."-".explode('-', $r["fecha_ini1"])[1]."-".explode('-', $r["fecha_ini1"])[0], new DateTimeZone('America/Santiago'));
                $examen->ENC_AS_FECHA_INI2 = $now = new DateTime(explode('-', $r["fecha_ini2"])[2]."-".explode('-', $r["fecha_ini2"])[1]."-".explode('-', $r["fecha_ini2"])[0], new DateTimeZone('America/Santiago'));
                $examen->ENC_AS_RESULT_MEDIDA  = $r["result_medida" ];           
                $examen->ENC_AS_RESULT_1  = $r["result_1"];
                $examen->ENC_AS_RESULT_2  = $r["result_2"];
                $examen->ENC_AS_RESULT_3  = $r["result_3"];
                $examen->ENC_AS_FECHA_INI3 = $now = new DateTime(explode('-', $r["fecha_ini3"])[2]."-".explode('-', $r["fecha_ini3"])[1]."-".explode('-', $r["fecha_ini3"])[0], new DateTimeZone('America/Santiago'));

                $examen->ENC_AS_FECHA_INI4 = $now = new DateTime(explode('-', $r["fecha_ini4"])[2]."-".explode('-', $r["fecha_ini4"])[1]."-".explode('-', $r["fecha_ini4"])[0], new DateTimeZone('America/Santiago'));
                $examen->ENC_AS_RESULT_4  = $r["result_4"];
                $examen->ENC_AS_RESULT_5  = $r["result_5"];
                $examen->ENC_AS_RESULT_6  = $r["result_6"];
                $examen->ENC_AS_RESULT_7  = $r["result_7"];
                $examen->ENC_AS_FECHA_INI5 = $now = new DateTime(explode('-', $r["fecha_ini5"])[2]."-".explode('-', $r["fecha_ini5"])[1]."-".explode('-', $r["fecha_ini5"])[0], new DateTimeZone('America/Santiago'));

                $examen->ENC_AS_FECHA_INI6 = $now = new DateTime(explode('-', $r["fecha_ini6"])[2]."-".explode('-', $r["fecha_ini6"])[1]."-".explode('-', $r["fecha_ini6"])[0], new DateTimeZone('America/Santiago'));
                $examen->ENC_AS_RESULT_8  = $r["result_8"];
                $examen->ENC_AS_RESULT_9  = $r["result_9"];
                $examen->ENC_AS_RESULT_10  = $r["result_10"];
                $examen->ENC_AS_RESULT_11  = $r["result_11"];
                $examen->ENC_AS_FECHA_INI7 = $now = new DateTime(explode('-', $r["fecha_ini7"])[2]."-".explode('-', $r["fecha_ini7"])[1]."-".explode('-', $r["fecha_ini7"])[0], new DateTimeZone('America/Santiago'));

                $examen->ENC_AS_FECHA_INI8 = $now = new DateTime(explode('-', $r["fecha_ini8"])[2]."-".explode('-', $r["fecha_ini8"])[1]."-".explode('-', $r["fecha_ini8"])[0], new DateTimeZone('America/Santiago'));
                $examen->ENC_AS_RESULT_12  = $r["result_12"];
                $examen->ENC_AS_RESULT_13  = $r["result_13"];
                $examen->ENC_AS_RESULT_14  = $r["result_14"];
                $examen->ENC_AS_MES  = $r["mes"];
                $examen->ENC_AS_C_MC_ING  = $r["c_mc_ing"];
                $examen->ENC_AS_C_MC_ADM  = $r["c_mc_adm"];
                $examen->ENC_AS_C_MC_EPP  = $r["c_mc_epp"];
                $examen->ENC_AS_R_PREG2_PROTECCION  = $r["r_preg2_proteccion"];
                $examen->ENC_AS_R_PREG3_MEDIO  = $r["r_preg3_medio"];
                $examen->ENC_AS_RESULT_15  = $r["result_15"];
                $examen->ENC_AS_RESULT_16  = $r["result_16"];
                $examen->ENC_AS_RESULT_17  = $r["result_17"];
                $examen->ENC_AS_RESULT_18  = $r["result_18"];
                $examen->ENC_AS_RESULT_19  = $r["result_19"];
                $examen->ENC_AS_RESULT_20  = $r["result_20"];
                $examen->ENC_AS_RESULT_21  = $r["result_21"];
                $examen->ENC_AS_RESULT_22  = $r["result_22"];
                $examen->ENC_AS_RESULT_23  = $r["result_23"];
                $examen->ENC_AS_RESULT_24  = $r["result_24"];
                $examen->ENC_AS_RESULT_25  = $r["result_25"];
                $examen->ENC_AS_RESULT_26  = $r["result_26"];
                $examen->ENC_AS_RESULT_27  = $r["result_27"];
                $examen->ENC_AS_RESULT_28  = $r["result_28"];
                $examen->ENC_AS_RESULT_29  = $r["result_29"];
                $examen->ENC_AS_RESULT_30  = $r["result_30"];
                $examen->ENC_AS_RESULT_31  = $r["result_31"];
                $examen->ENC_AS_RESULT_32  = $r["result_32"];
                $examen->ENC_AS_RESULT_33  = $r["result_33"];
                $examen->ENC_AS_RESULT_R_RESPIRADOR  = $r["r_respirador"];
                $examen->ENC_AS_FECHA_INI9 = $now = new DateTime(explode('-', $r["fecha_ini9"])[2]."-".explode('-', $r["fecha_ini9"])[1]."-".explode('-', $r["fecha_ini9"])[0], new DateTimeZone('America/Santiago'));
                $examen->ENC_AS_T_RESULTMARCA  = $r["t_resulMarca"];
                $examen->ENC_AS_R_TALLA   = $r["r_talla"];
                $examen->ENC_AS_R_PI   = $r["r_pi"];
                $examen->ENC_AS_RESULT_R_CAPA  = $r["r_capa"];
                $examen->ENC_AS_RESULT_FECHA10 = $now = new DateTime(explode('-', $r["fecha_ini10"])[2]."-".explode('-', $r["fecha_ini10"])[1]."-".explode('-', $r["fecha_ini10"])[0], new DateTimeZone('America/Santiago'));
                $examen->ENC_AS_RESULT_ORG1 = $r["result_org1"];
                $examen->ENC_AS_R_ASIS = $r["r_asis"];
                $examen->as_preg_extra4 = $r["as_preg_extra4"];
                $examen->as_preg_extra1 = $r["as_preg_extra1"];
                $examen->as_preg_extra2 = $r["as_preg_extra2"];
                $examen->as_preg_extra3 = $r["as_preg_extra3"];
                $examen->ENC_AS_R_1  = $r["r_1"];
                $examen->ENC_AS_RESULT_34  = $r["result_34"];
                $examen->ENC_AS_RESULT_35  = $r["result_35"];
                $examen->ENC_AS_R_2  = $r["r_2"];
                $examen->ENC_AS_RESULT_36  = $r["result_36"];
                $examen->ENC_AS_RESULT_37  = $r["result_37"];
                $examen->ENC_AS_R_3  = $r["r_3"];
                $examen->ENC_AS_RESULT_38  = $r["result_38"];
                $examen->ENC_AS_RESULT_39  = $r["result_39"];
                $examen->ENC_AS_R_4  = $r["r_4"];
                $examen->ENC_AS_RESULT_40  = $r["result_40"];
                $examen->ENC_AS_RESULT_41  = $r["result_41"];
                $examen->ENC_AS_R_5  = $r["r_5"];
                $examen->ENC_AS_RESULT_42  = $r["result_42"];
                $examen->ENC_AS_RESULT_43  = $r["result_43"];
                $examen->ENC_AS_R_6  = $r["r_6"];
                $examen->ENC_AS_RESULT_44  = $r["result_44"];
                $examen->ENC_AS_RESULT_45  = $r["result_45"]; 
                $examen->ENC_AS_R_7  = $r["r_7"];
                $examen->ENC_AS_RESULT_46  = $r["result_46"];
                $examen->ENC_AS_RESULT_47  = $r["result_47"];
                $examen->ENC_AS_R_8  = $r["r_8"];
                $examen->ENC_AS_RESULT_48  = $r["result_48"];
                $examen->ENC_AS_RESULT_49  = $r["result_49"];
                $examen->ENC_AS_R_9  = $r["r_9"];
                $examen->ENC_AS_RESULT_50  = $r["result_50"];
                $examen->ENC_AS_RESULT_51  = $r["result_51"];
                $examen->ENC_AS_R_10  = $r["r_10"];
                $examen->ENC_AS_RESULT_52  = $r["result_52"];
                $examen->ENC_AS_RESULT_53  = $r["result_53"];
                $examen->ENC_AS_R_11  = $r["r_11"];
                $examen->ENC_AS_RESULT_54  = $r["result_54"];
                $examen->ENC_AS_RESULT_55  = $r["result_55"];
                $examen->ENC_AS_R_12  = $r["r_12"];
                $examen->ENC_AS_RESULT_56  = $r["result_56"];
                $examen->ENC_AS_RESULT_57  = $r["result_57"];
                $examen->ENC_AS_R_13  = $r["r_13"];
                $examen->ENC_AS_RESULT_58  = $r["result_58"];
                $examen->ENC_AS_RESULT_59  = $r["result_59"]; 
                $examen->ENC_AS_R_14  = $r["r_14"];
                $examen->ENC_AS_RESULT_60  = $r["result_60"];
                $examen->ENC_AS_RESULT_61  = $r["result_61"];
                $examen->ENC_AS_R_15  = $r["r_15"];
                $examen->ENC_AS_RESULT_62  = $r["result_62"];
                $examen->ENC_AS_RESULT_63  = $r["result_63"];
                $examen->ENC_AS_R_16  = $r["r_16"];
                $examen->ENC_AS_RESULT_64  = $r["result_64"];
                $examen->ENC_AS_RESULT_65  = $r["result_65"];
                //$examen->ENC_AS_RESULT_66  = $r["result_66"];
                $examen->ENC_AS_R_17  = $r["r_17"];
                $examen->ENC_AS_RESULT_67  = $r["result_67"];
                $examen->ENC_AS_RESULT_68  = $r["result_68"];
                $examen->ENC_AS_R_18  = $r["r_18"];
                $examen->ENC_AS_RESULT_69  = $r["result_69"]; 
                $examen->ENC_AS_RESULT_70  = $r["result_70"];
                $examen->ENC_AS_R_19  = $r["r_19"];
                $examen->ENC_AS_RESULT_71  = $r["result_71"];
                $examen->ENC_AS_RESULT_72  = $r["result_72"];
                $examen->ENC_AS_R_20  = $r["r_20"];
                $examen->ENC_AS_RESULT_73  = $r["result_73"];
                $examen->ENC_AS_RESULT_74  = $r["result_74"];
                $examen->ENC_AS_RESULT_75  = $r["result_75"];
               //TODO:CAMBIAR A DINAMICO
                $examen->realizadoEncuenta = 1;                
                $examen->save();
                //

                DB::table("cargas")->where("id", "=", session()->get('idCarga'))
                ->update(["encuesta" => 1]);
                
                


                return redirect()->action('PruebasController@pico');

              }

              if ($r->session()->get('idAgente') == 4) {
                //fOOOrmol

                //esto es fijo NO TOCAR
                $examen = new Examen();
        
                $examen->users_id = $idUsuario;
                $examen->pacientes_id = $idPaciente;
                $examen->agentes_id = 21;
                $examen->cargas_id = $carga->id;

                //
                $examen->ENC_FO_R_PC    = $r["r_pc"];                                  
                $examen->ENC_FO_R_LP    = $r["r_lp"];
                $examen->ENC_FO_R_TS    = $r["r_ts"];
                $examen->ENC_FO_R_ADM   = $r["r_adm"];
                $examen->ENC_FO_R_LC    = $r["r_lc"];
                $examen->ENC_FO_R_DR    = $r["r_dr"];
                $examen->ENC_FO_R_CP    = $r["r_cp"];
                $examen->ENC_FO_PREG1   = $r["preg1"];
                $examen->ENC_FO_PREG2   = $r["preg2"];
                $examen->ENC_FO_PREG3   = $r["preg3"];
                $examen->ENC_FO_PREG4   = $r["preg4"];
                $examen->ENC_FO_PREG5   = $r["preg5"];
                $examen->ENC_FO_PREG6   = $r["preg6"];
                $examen->ENC_FO_PREG7   = $r["preg7"];
                $examen->ENC_FO_PREG8   = $r["preg8"];
                $examen->ENC_FO_PREG9   = $r["preg9"];
                $examen->ENC_FO_PREG10  = $r["preg10"];
                $examen->ENC_FO_PREG11  = $r["preg11"];
                $examen->ENC_FO_PREG12  = $r["preg12"];
                $examen->ENC_FO_PREG13  = $r["preg13"];
                $examen->ENC_FO_PREG14  = $r["preg14"];
                $examen->ENC_FO_PREG15  = $r["preg15"];
                $examen->ENC_FO_PREG16  = $r["preg16"];
                $examen->ENC_FO_PREG17  = $r["preg17"];
                $examen->ENC_FO_PREG18  = $r["preg18"];
                $examen->ENC_FO_PREG19  = $r["preg19"];
                $examen->ENC_FO_PREG20  = $r["preg20"];
                $examen->ENC_FO_PREG21  = $r["preg21"];
                $examen->ENC_FO_PREG22  = $r["preg22"];
                $examen->ENC_FO_PREG23  = $r["preg23"];
                $examen->ENC_FO_PREG24  = $r["preg24"];
                $examen->ENC_FO_PREG25  = $r["preg25"];
                $examen->ENC_FO_PREG26  = $r["preg26"];
                $examen->ENC_FO_PREG27  = $r["preg27"];
                $examen->ENC_FO_PREG28  = $r["preg28"];
                $examen->ENC_FO_PREG29  = $r["preg29"];
                $examen->ENC_FO_PREG30  = $r["preg30"];
                $examen->ENC_FO_R_D     = $r["r_d"];
                $examen->ENC_FO_PREG31  = $r["preg31"];
                $examen->ENC_FO_PREG32  = $r["preg32"];
                $examen->ENC_FO_R_C     = $r["r_c"];
                $examen->ENC_FO_PREG33  = $r["preg33"];
                $examen->ENC_FO_PREG34  = $r["preg34"];
                $examen->ENC_FO_R_MD    = $r["r_md"];
                $examen->ENC_FO_PREG35  = $r["preg35"];
                $examen->ENC_FO_PREG36  = $r["preg36"];
                $examen->ENC_FO_R_GL    = $r["r_gl"];
                $examen->ENC_FO_C_CP    = $r["c_cp"];
                $examen->ENC_FO_C_SP    = $r["c_sp"];
                $examen->ENC_FO_R_GN    = $r["r_gn"];
                $examen->ENC_FO_PREG37  = $r["preg37"];
                $examen->ENC_FO_PREG38  = $r["preg38"];
                $examen->ENC_FO_PREG39  = $r["preg39"];
                $examen->ENC_FO_R_GNE   = $r["r_gne"];
                $examen->ENC_FO_PREG40  = $r["preg40"];
                $examen->ENC_FO_PREG41  = $r["preg41"];
                $examen->ENC_FO_R_GMU   = $r["r_gmu"];
                $examen->ENC_FO_PREG42  = $r["preg42"];
                $examen->ENC_FO_PREG43  = $r["preg43"];
                $examen->ENC_FO_R_GPVC   = $r["r_gpvc"];
                $examen->ENC_FO_PREG44  = $r["preg44"];
                $examen->ENC_FO_PREG45  = $r["preg45"];
                $examen->ENC_FO_R_GP    = $r["r_gp"];
                $examen->ENC_FO_PREG46  = $r["preg46"];
                $examen->ENC_FO_PREG47  = $r["preg47"];
                $examen->ENC_FO_R_PP    = $r["r_pp"];
                $examen->ENC_FO_PREG48  = $r["preg48"];
                $examen->ENC_FO_PREG49  = $r["preg49"];
                $examen->ENC_FO_R_CD    = $r["r_cd"];
                $examen->ENC_FO_PREG50  = $r["preg50"];
                $examen->ENC_FO_R_BG    = $r["r_bg"];
                $examen->ENC_FO_PREG51  = $r["preg51"];
                $examen->ENC_FO_PREG52  = $r["preg52"];
                $examen->ENC_FO_PREG53  = $r["preg53"];
                $examen->ENC_FO_R_OTROS = $r["r_otros"]; 
                $examen->ENC_FO_PREG54  = $r["preg54"];
                $examen->ENC_FO_PREG55  = $r["preg55"]; 
                
  



               

                
                $examen->realizadoEncuenta = 1;
        
                $examen->save();

                DB::table("cargas")->where("id", "=", session()->get('idCarga'))
                ->update(["encuesta" => 1]);


              }

              if ($r->session()->get('idAgente') == 5) {
                //CITO

                //esto es fijo NO TOCAR
                $examen = new Examen();
        
                $examen->users_id = $idUsuario;
                $examen->pacientes_id = $idPaciente;
                $examen->agentes_id = 22;

                
                $examen->realizadoEncuenta = 1;
                $examen->realizadoAntecedente = 1;
                $examen->save();

                DB::table("cargas")->where("id", "=", session()->get('idCarga'))
                ->update(["encuesta" => 1]);


              }
              if ($r->session()->get('idAgente') == 2) {
                //fOOOrmol

                //esto es fijo NO TOCAR
                $examen = new Examen();
        
                $examen->users_id = $idUsuario;
                $examen->pacientes_id = $idPaciente;
                $examen->agentes_id = 22;

                $examen->ENC_CI_R_PC    = $r["r_pc"];                                  
                $examen->ENC_CI_R_LP    = $r["r_lp"];
                $examen->ENC_CI_R_TS    = $r["r_ts"];
                $examen->ENC_CI_R_ADM   = $r["r_adm"];
                $examen->ENC_CI_R_LC    = $r["r_lc"];
                $examen->ENC_CI_R_DR    = $r["r_dr"];
                $examen->ENC_CI_R_CP    = $r["r_cp"];
                $examen->ENC_CI_PREG1   = $r["preg1"];
                $examen->ENC_CI_PREG2   = $r["preg2"];
                $examen->ENC_CI_PREG3   = $r["preg3"];
                $examen->ENC_CI_PREG4   = $r["preg4"];
                $examen->ENC_CI_PREG5   = $r["preg5"];
                $examen->ENC_CI_PREG6   = $r["preg6"];
                $examen->ENC_CI_PREG7   = $r["preg7"];
                $examen->ENC_CI_PREG8   = $r["preg8"];
                $examen->ENC_CI_PREG9   = $r["preg9"];
                $examen->ENC_CI_PREG10  = $r["preg10"];
                $examen->ENC_CI_PREG11  = $r["preg11"];
                $examen->ENC_CI_PREG12  = $r["preg12"];
                $examen->ENC_CI_PREG13  = $r["preg13"];
                $examen->ENC_CI_PREG14  = $r["preg14"];
                $examen->ENC_CI_PREG15  = $r["preg15"];
                $examen->ENC_CI_PREG16  = $r["preg16"];
                $examen->ENC_CI_PREG17  = $r["preg17"];
                $examen->ENC_CI_PREG18  = $r["preg18"];
                $examen->ENC_CI_PREG19  = $r["preg19"];
                $examen->ENC_CI_PREG20  = $r["preg20"];
                $examen->ENC_CI_PREG21  = $r["preg21"];
                $examen->ENC_CI_PREG22  = $r["preg22"];
                $examen->ENC_CI_PREG23  = $r["preg23"];
                $examen->ENC_CI_PREG24  = $r["preg24"];
                $examen->ENC_CI_PREG25  = $r["preg25"];
                $examen->ENC_CI_PREG26  = $r["preg26"];
                $examen->ENC_CI_PREG27  = $r["preg27"];
                $examen->ENC_CI_PREG28  = $r["preg28"];
                $examen->ENC_CI_PREG29  = $r["preg29"];
                $examen->ENC_CI_PREG30  = $r["preg30"];
                $examen->ENC_CI_R_D     = $r["r_d"];
                $examen->ENC_CI_PREG31  = $r["preg31"];
                $examen->ENC_CI_PREG32  = $r["preg32"];
                $examen->ENC_CI_R_C     = $r["r_c"];
                $examen->ENC_CI_PREG33  = $r["preg33"];
                $examen->ENC_CI_PREG34  = $r["preg34"];
                $examen->ENC_CI_R_MD    = $r["r_md"];
                $examen->ENC_CI_PREG35  = $r["preg35"];
                $examen->ENC_CI_PREG36  = $r["preg36"];
                $examen->ENC_CI_R_GL    = $r["r_gl"];
                $examen->ENC_CI_C_CP    = $r["c_cp"];
                $examen->ENC_CI_C_SP    = $r["c_sp"];
                $examen->ENC_CI_R_GN    = $r["r_gn"];
                $examen->ENC_CI_PREG37  = $r["preg37"];
                $examen->ENC_CI_PREG38  = $r["preg38"];
                $examen->ENC_CI_PREG39  = $r["preg39"];
                $examen->ENC_CI_R_GNE   = $r["r_gne"];
                $examen->ENC_CI_PREG40  = $r["preg40"];
                $examen->ENC_CI_PREG41  = $r["preg41"];
                $examen->ENC_CI_R_GMU   = $r["r_gmu"];
                $examen->ENC_CI_PREG42  = $r["preg42"];
                $examen->ENC_CI_PREG43  = $r["preg43"];
                $examen->ENC_FO_R_GPVC   = $r["r_gpvc"];
                $examen->ENC_CI_PREG44  = $r["preg44"];
                $examen->ENC_CI_PREG45  = $r["preg45"];
                $examen->ENC_CI_R_GP    = $r["r_gp"];
                $examen->ENC_CI_PREG46  = $r["preg46"];
                $examen->ENC_CI_PREG47  = $r["preg47"];
                $examen->ENC_CI_R_PP    = $r["r_pp"];
                $examen->ENC_CI_PREG48  = $r["preg48"];
                $examen->ENC_CI_PREG49  = $r["preg49"];
                $examen->ENC_CI_R_CD    = $r["r_cd"];
                $examen->ENC_CI_PREG50  = $r["preg50"];
                $examen->ENC_CI_R_BG    = $r["r_bg"];
                $examen->ENC_CI_PREG51  = $r["preg51"];
                $examen->ENC_CI_PREG52  = $r["preg52"];
                $examen->ENC_CI_PREG53  = $r["preg53"];
                $examen->ENC_CI_R_OTROS = $r["r_otros"]; 
                $examen->ENC_CI_PREG54  = $r["preg54"];
                $examen->ENC_CI_PREG55  = $r["preg55"];

                $examen->realizadoEncuenta = 1;
                
                $examen->save();

                DB::table("cargas")->where("id", "=", session()->get('idCarga'))
                ->update(["encuesta" => 1]);

              }



           
             
  }
  
}
