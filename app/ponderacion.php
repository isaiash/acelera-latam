<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ponderacion extends Model
{
    protected $table = 'ponderaciones';


        public function etapas()
    {
        return $this->hasOne('App\etapa','etapa_id', 'id');
    }


       public function preguntas()
    {
        return $this->hasOne('App\pregunta','pregunta_id', 'id');
    }





}
