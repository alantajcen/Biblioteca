<?php

namespace App\Http\Controllers;

use App\Models\Inicio;
use App\Models\Prestamos;
use App\Models\Libro;
use App\Models\Alumnos;
use App\Models\Usuarios;
use Illuminate\Http\Request;

class InicioController extends Controller
{
     public function __construct()
        {
            $this->middleware('auth');
        }

 
    public function index()
    {
        $prestamos = Prestamos::all()->where('estado', 'Finalizado');
        $libros = Libro::all();
        $alumnos = Alumnos::all();
        $usuarios = Usuarios::all();

        return view('modulos.inicio', compact('prestamos', 'libros', 'alumnos', 'usuarios'));
    }

   
}
