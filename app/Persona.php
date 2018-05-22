<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{

    protected $table = 'personas';


    public function organismo(){
      return $this->hasOne('App\Organismo', 'organismo_id');
    }

}
