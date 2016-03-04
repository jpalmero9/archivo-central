<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class usuarios extends Model
{
    //
    protected $table = 'usuarios';
    protected $primaryKey = 'id_usuario';

    protected $fillable = ['nombreUsuario','claveUsuario','identNombre','identApellido','email','categoria'];

	public $timestamps = false;

}

