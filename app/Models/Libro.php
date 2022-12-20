<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    use HasFactory;

    protected $fillable = [

    	'titulo',
    	'portada',
    	'resumen',
    	'fecha_publicacion',
    	'id_genero',
    	'id_autor',
    	'stock',
    	//'costo',
    	'idioma'
    ];

    public $timestamps = false;

    public function GENERO()
    {
    	
    	return $this->belongsTo(Genero::class, 'id_genero');

    }

    public function AUTOR()
    {

    	return $this->belongsTo(Autores::class, 'id_autor');
    	
    }
}
