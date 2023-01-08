<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prestamos extends Model
{
    use HasFactory;

    protected $table = "prestamos";

    protected $fillable = [
    		'id_alumno',
    		'id_maestro',
    		'estado',
    		'fecha',
			'fecha_fin',
    		'total'
		];

	public $timestamps = false;

	public function ALUMNO()
	{
		return $this->belongsTo(Alumnos::class, 'id_alumno');

	}

	public function MAESTRO()
	{
		return $this->belongsTo(User::class, 'id_maestro');
		
	}

}
