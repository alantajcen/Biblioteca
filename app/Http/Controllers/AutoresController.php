<?php

namespace App\Http\Controllers;

use App\Models\Autores;
use App\Models\Libro;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AutoresController extends Controller
{

         public function __construct()
        {
            $this->middleware('auth');
        }


    public function index()
    {
        $autores = Autores::all();

        return view('modulos.Autores')->with('autores', $autores);
    }


    public function create()
    {

        return view('modulos.Agregar-Autor');

    }


    public function store(Request $request)
    {
        $datos = request()->validate([

            'nombre' => ['required', 'string'],
            'info' => ['required', 'string'],
            'foto' => ['required', 'image']
        ]);

        $rutaImagen = $datos["foto"]->store('Autores', 'public');

        autores::create([

            'nombre'=>$datos["nombre"],
            'foto'=>$rutaImagen,
            'info'=>$datos["info"]
        ]); 

        return redirect('Autores')->with('AutorCreado', 'OK');

    }

    public function show(Autores $autores)
    {
        //
    }

    public function edit(Autores $autores)
    {
        //
    }

    public function update(Request $request, Autores $autores)
    {
        //
    }

    public function destroy($autor)
    {
        $autorFoto = Autores::find($autor);

        if(Storage::delete('public/'.$autorFoto->foto)){
            
            Autores::destroy($autor);

        }

        return redirect('Autores');
    }

    public function AutorLibros($idAutor)
    {
        $autor = Autores::find($idAutor);

        $libros = Libro::all()->where('id_autor', $idAutor);

        return view('modulos.Autor-Libros', compact('autor', 'libros'));
    } 
}
