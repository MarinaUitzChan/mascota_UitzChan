<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Razas extends Model
{
    //
    protected $tabel='razas';
    //Se especifica la clave primaria
    protected $primaryKey='id_raza';

    public $fillable=[
    	'id_raza',
    	'raza'
    ];
}
