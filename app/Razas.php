<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Razas extends Model
{
    //
    protected $tabel='razas';
    //Se especifica la clave primaria
    protected $primaryKey='id_raza';

    public $incrementing=true;
    public $timestamps=false;

    public $fillable=[
    	'id_raza',
    	'raza'
    ];
}
