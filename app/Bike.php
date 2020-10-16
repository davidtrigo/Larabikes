<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bike extends Model{
    
    //MODELO PARA LAS BIKES
    
    //Campos que se deben escribir en la BBDD
    protected $fillable =['marca','modelo', 'kms','precio','matriculada'];
}
