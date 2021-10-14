<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Propietario extends Model
{
    //
    protected $tabel='propietario';
    //Se especifica la clave primaria
    protected $primaryKey='id_propietario';

    public $fillable=[
    	'nombre',
    	'primer_apellido',
    	'segundo_apellido',
    	'genero',
    	'celular',
    	'calle',
    	'colonia',
    	'nummit',
    	'localidad'
    ];

}
