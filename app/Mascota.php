<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mascota extends Model
{
    //Nombre de la tabla
    protected $tabel='mascotas';
    //Se especifica la clave primaria
    protected $primaryKey='id_mascota';
    //Relaciones
    protected $with=['especie', 'raza'];
    //Se coloca true cuando la clave primaria sea númerica
    public $incrementing=true;
    //Se coloca cuando quieras poner etiqueta de tiempo.
    public $timestamps=false;

    //campos que se van a tomar valor
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
    //Descripción de relacion
    public function especie()
    {
        //Se utiliza cuando se desea relacionar un registro hijo con solo un elemento padre.
        return $this-> belongsTo(Especie::class, 'id_especie', 'id_especie');
    }

    public function raza()
    {
        return $this->belongsTo(Raza::class, 'id_raza', 'id_raza');
    };

}
