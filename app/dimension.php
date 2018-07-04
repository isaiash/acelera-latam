<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dimension extends Model
{
    
		protected $table = 'dimensiones';

		public function preguntas()
    {
        return $this->hasMany('App\pregunta');
    }




}
