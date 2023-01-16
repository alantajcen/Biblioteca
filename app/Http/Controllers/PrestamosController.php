<?php

namespace App\Http\Controllers;

use App\Models\Prestamos;
use App\Models\Alumnos;
use App\Models\User;
use App\Models\Libro;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PrestamosController extends Controller
{

         public function __construct()
        {
            $this->middleware('auth');
        }


    public function create()
    {
        $alumnos = Alumnos::all();

        $prestamos = Prestamos::all()->where('estado', 'Creado');

        return view('modulos.Crear-Prestamos', compact('alumnos' , 'prestamos'));
    }

    public function store(Request $request)
    {
        $datos = request();

        Prestamos::create([

            'id_alumno'=>$datos["id_alumno"],
            'fecha'=>$datos["fecha"],
            //'fecha_fin' => 'test',
            'estado'=>'Creado',
            //'total'=>'',
            'id_maestro'=>auth()->user()->id

         ]);

        return redirect('Crear-Prestamos');
    }

    public function venta($id)
    {
        $prestamo = Prestamos::find($id);
        $alumnos = Alumnos::find($prestamo->id_alumno);
        $maestros = User::find($prestamo->id_maestro);
        $libros = Libro::all();

        $librosPrestamo = DB::select('select * from prestamo where id_prestamo = '.$id);

        if($prestamo->id_maestro != auth()->user()->id){

            return redirect('Crear-Prestamos');

        }

        if ($prestamo->estado == 'Finalizado') {
            
            return redirect('Ver-Prestamos');
        }

        return view('modulos.Prestamo', compact('prestamo', 'alumnos', 'maestros', 'libros', 'librosPrestamo'));
    }

    public function AñadirPrestamo($id)
    {
        $datos = request();
        $stockN = $datos["stock"]-1;
        DB::table('libros')->where('id', $datos["id_libro"])->update(['stock'=>$stockN]);
        DB::table('prestamo')->insert([
            'id_prestamo'=>$datos["id_prestamo"],
            'id_libro'=>$datos["id_libro"],
            //'costo'=>$datos["costo"]//
        ]);

        return redirect('Prestamo/'.$id)->with('libro_prestado', 'OK');;

    }

    public function QuitarLibroPrestamo($id)
    {
        $datos = request();

        $stockN = $datos["stock"] + 1;
        DB::table('libros')->where('id', $datos["id_libro"])->update(['stock'=>$stockN]);

        DB::table('prestamo')->whereId($datos["id"])->delete();

        return redirect('Prestamo/'.$id);
    }

    public function FinalizarPrestamo()
    {
        date_default_timezone_set('America/Mexico_City');
        $datos = request();

        DB::table('prestamos')->where('id', $datos["id"])->update([
            'estado'=>'Finalizado',
            'fecha_fin'=> date('d/m/Y - H:i')
        ]);

        return redirect('Ver-Prestamos');
    }

    public function VerPrestamos()
    {

    $prestamos = Prestamos::all()->where('estado', 'Finalizado');

    return view('modulos.Ver-Prestamos')->with('prestamos', $prestamos);

    }

    public function VerPrestamo($id)
    {

    $prestamo = Prestamos::find($id);

    $libros = Libro::all();

    $alumno = Alumnos::find($prestamo->id_alumno);

    $maestro = User::find($prestamo->id_maestro);

    $librosPrestamo = DB::select('select * from prestamo where id_prestamo = '.$id);

    return view('modulos.Ver-Prestamo', compact('prestamo', 'libros', 'alumno', 'maestro', 'librosPrestamo'));

    }

}
