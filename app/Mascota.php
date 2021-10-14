<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mascota extends Model
{
    //
      protected $tabel='mascotas';
    //Se especifica la clave primaria
    protected $primaryKey='id_mascota';

    protected $with=['especie', 'raza' , 'propietario'];

    public $fillable=[
    	'id_mascota',
    	'nombre',
    	'edad',
    	'peso',
    	'genero',
    	//Llaves foraneas
    	'id_propietario',
    	'id_especie';
    	'id_raza'

    ];
}
