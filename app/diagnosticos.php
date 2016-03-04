<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class diagnosticos extends Model
{
    //

    protected $table = 'diagnosticos';

    protected $primaryKey = 'id_diagnostico';

    protected $fillable = ['diagnostico'];

	public $timestamps = false;

}
