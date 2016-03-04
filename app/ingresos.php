<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ingresos extends Model
{
    //

    protected $table = 'ingresos';
    protected $primaryKey = 'id_ingreso';

    protected $fillable = ['ingreso'];

	public $timestamps = false;

}
