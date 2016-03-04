<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ficha extends Model
{
    //


    protected $table = 'ficha';
    protected $primaryKey = 'id_ficha';

    protected $fillable = ['id_ingreso', 'id_diagnostico', 'nro_historia', 'ci_prefijo','ci', 'fecha_Ingreso', 'fecha_registro', 'nombre', 'apellido', 'ubicaion_fisica', 'Observaciones'];

	public $timestamps = false;


}
