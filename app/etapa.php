<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class etapa extends Model
{

   protected $table = 'etapas';

        public function dimensiones()
    {
        return $this->belongsToMany('App\dimension');
    }

         public function ponderaciones()
    {
        return $this->hasMany('App\ponderacion');
    }
}
