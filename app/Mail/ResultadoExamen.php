<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\DB;

class ResultadoExamen extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */


     public $data = [];

    public function __construct($idE)
    {
        //
        $columnas = DB::table("agentescolumnas")->where("agente_id", 18)->get();
        $examen = DB::table("examens")->where("id", $idE)->first();

        foreach ($columnas as $dato) {

            $tem = $dato->columna;
            array_push($this->data, [    $dato->glosaDesc => $examen->$tem   ]);

        }

       
        

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        

        return $this->view('mails.resultadoExamen')
        ->with("resultados");
        //return $this->view('view.name');
    }
}
