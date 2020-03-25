<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Examen extends Model
{
    //
    public function usuario()
    {
        return $this->belongsTo('App\User', 'users_id');
    }

    public function paciente()
    {
        return $this->belongsTo('App\Paciente', 'pacientes_id');
    }
    
    public function agente()
    {
        return $this->belongsTo('App\Agente', 'agentes_id');
    }

    public function carga()
    {
        return $this->belongsTo('App\Carga', 'cargas_id');
    }

}
