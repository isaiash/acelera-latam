<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class respuesta extends Model
{
    protected $table = 'respuestas';



       public function Users()
    {
        return $this->hasOne('App\User','user_id', 'id');
    }



       public function preguntas()
    {
        return $this->hasOne('App\pregunta','pregunta_id', 'id');
    }




}
