<?php

namespace App\Http\Controllers;

use App\Models\Alumnos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class AlumnosController extends Controller
{
        public function __construct()
        {
            $this->middleware('auth');
        }

    public function index()
    {
        $alumnos = Alumnos::all();

        return view('modulos.alumnos')->with('alumnos', $alumnos);
    }

   
    public function store(Request $request)
    {
        $datos = request();

        Alumnos::create([

            'nombre'=>$datos["nombre"],          
            'documento'=>$datos["documento"],        
            'grado'=>$datos["grado"],
            'grupo'=>$datos["grupo"],
            'direccion'=>$datos["direccion"],
            'telefono'=>$datos["telefono"]
        ]);

        return redirect('Alumnos')->with('AlumnoCreado', 'OK');

    }

    public function edit($alum)
    {
        $alum = Alumnos::find($alum);

        $alumnos = Alumnos::all();

        return view('modulos.alumnos', compact('alum', 'alumnos'));
    }

    public function update(Request $request, $id)
    {
        $datos = request();

        DB::table('alumnos')->where('id', $id)->update(['nombre'=>$datos["nombre"], 'documento'=>$datos["documento"], 'grado'=>$datos["grado"], 'grupo'=>$datos["grupo"], 'direccion'=>$datos["direccion"], 'telefono'=>$datos["telefono"]]);

        return redirect('Alumnos')->with('AlumnoActualizado', 'ok');
    }

  
    public function destroy($id)
    {
        Alumnos::destroy($id);
        return redirect('Alumnos');
    }

    public function PrestamoAlumno(Request $request)
    {
        $datos = request();

        Alumnos::create([

            'nombre'=>$datos["nombre"],          
            'documento'=>$datos["documento"],        
            'grado'=>$datos["grado"],
            'grupo'=>$datos["grupo"],
            'direccion'=>$datos["direccion"],
            'telefono'=>$datos["telefono"]
        ]);

        return redirect('Crear-Prestamos')->with('AlumnoCreado', 'OK');
    }
}
