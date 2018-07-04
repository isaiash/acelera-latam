<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pregunta extends Model
{
    protected $table = 'preguntas';


        public function respuestas()
    {
        return $this->hasMany('App\respuesta');
    }

        public function dimensiones()
    {
        return $this->hasOne('App\dimension','dimension_id', 'id');
    }


}
