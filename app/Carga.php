<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carga extends Model
{
    //
    public function agente()
    {
        return $this->belongsTo('App\Agente', 'agentes_id');
    }
}
