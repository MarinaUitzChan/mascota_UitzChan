<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Propietario extends Model
{
    //
    protected $tabel='especies';
    //Se especifica la clave primaria
    protected $primaryKey='id_especie';

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
