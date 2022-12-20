<?php

namespace App\Http\Controllers;

use App\Models\Libro;
use App\Models\Genero;
use App\Models\Autores;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class LibroController extends Controller
{
         public function __construct()
        {
            $this->middleware('auth');
        }

    public function index()
    {

        $generos = Genero::all();
        $autores = Autores::all();
        $libros = Libro::all();

        return view('modulos.Libros', compact('generos', 'autores', 'libros'));
    }

    public function store(Request $request)
    {
        $datos = request()->validate([

            'titulo' =>['required', 'string', 'max:255'],
            'resumen' =>['required', 'string'],
            'idioma' =>['required', 'string', 'max:255'],
            'fecha_publicacion' =>['required'],
            'stock' =>['required'],
            //'costo' =>['required'],
            'id_autor' =>['required'],
            'id_genero' =>['required'],
            'portada' =>['required', 'image']
        ]);

        $rutaImg = $datos["portada"]->store('Libros', 'public');

        Libro::create([
            'titulo'=>$datos["titulo"],
            'id_genero'=>$datos["id_genero"],
            'id_autor'=>$datos["id_autor"],
            'idioma'=>$datos["idioma"],
            'resumen'=>$datos["resumen"],
            'stock'=>$datos["stock"],
            //'costo'=>$datos["costo"],
            'fecha_publicacion'=>$datos["fecha_publicacion"],
            'portada'=>$rutaImg

        ]);

        return redirect('Libros')->with('LibroCreado', 'OK');
        
    }

    public function show($libro)

    {
        $resumen = Libro::find($libro);

        $generos = Genero::all();
        $autores = Autores::all();
        $libros = Libro::all();

        return view('modulos.Libros', compact('resumen', 'generos', 'libros', 'autores'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Libro  $libro
     * @return \Illuminate\Http\Response
     */
    public function edit($libro)
    {
        $generos = Genero::all();
        $autores = Autores::all();
        $libros = Libro::all();

        $libroE = Libro::find($libro);
            return view('modulos.Libros', compact('libroE', 'generos', 'libros', 'autores'));
    }

    public function update(Request $request, $libro)
    {
          $datos = request()->validate([

            'titulo' =>['required', 'string', 'max:255'],
            'resumen' =>['required', 'string'],
            'idioma' =>['required', 'string', 'max:255'],
            'fecha_publicacion' =>['required'],
            'stock' =>['required'],
            //'costo' =>['required'],
            'id_autor' =>['required'],
            'id_genero' =>['required']
        ]);

            $LIBRO = Libro::find($libro);

            $LIBRO->titulo = $datos["titulo"];
            $LIBRO->id_genero = $datos["id_genero"];
            $LIBRO->id_autor = $datos["id_autor"];
            $LIBRO->idioma = $datos["idioma"];
            $LIBRO->resumen = $datos["resumen"];
            $LIBRO->stock = $datos["stock"];
            //$LIBRO->costo = $datos["costo"];
            $LIBRO->fecha_publicacion = $datos["fecha_publicacion"];

            if($request["portadaN"]){

                Storage::delete('public/'.$LIBRO->portada);

                $rutaImg = $request["portadaN"]->store('Libros', 'public');

                $LIBRO->portada = $rutaImg;

            }

            $LIBRO->save();

            return redirect('Libros');

    }

    public function destroy($libro)
    {
        

        $EliminarLibro = Libro::find($libro);

        if (Storage::delete('public/'.$EliminarLibro->portada)) {
            
            Libro::destroy($libro);

        }

        return redirect('Libros');
    }
}
