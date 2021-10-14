<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Especie extends Model
{
    //
    protected $tabel='especies';
    //Se especifica la clave primaria
    protected $primaryKey='id_especie';

    public $fillable=[
    		'id_especie',
    		'especie'
   ];

}
