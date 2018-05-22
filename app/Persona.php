<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    protected $table = 'personas';

    protected $fillable = ['nombre', 'apellido', 'email', 'organismo_id'];
    
    public function organismo(){
      return $this->belongsTo('App\Organismo', 'organismo_id');
    }

}
