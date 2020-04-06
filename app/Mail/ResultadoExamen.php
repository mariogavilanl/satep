<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class ResultadoExamen extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */


     public $data = [];
     public $objeto;
     public $observacion = "";


    public function __construct($idE)
    {
        //

        $examen = DB::table("examens")->where("id", $idE)->first();
        $this->observacion = $examen->observacionDoctor;

        $columnas = DB::table("agentescolumnas")->where("agente_id", $examen->agentes_id)->get();

    
        foreach ($columnas as $dato) {

            $tem = $dato->columna;
            array_push($this->data, [    $dato->glosaDesc => $examen->$tem   ]);

        }
        
        $this->objeto = (object) $this->data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        
   
        $user = Auth::user();

        return $this->view('mails.resultadoExamen')
        ->with([
            
            "resultados" => $this->objeto,
            "doctor" => $user->name,
            "observacion" => $this->observacion
            ]);
        
        //return $this->view('view.name');
    }
}
