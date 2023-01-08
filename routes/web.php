<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\AlumnosController;
use App\Http\Controllers\GeneroController;
use App\Http\Controllers\AutoresController;
use App\Http\Controllers\LibroController;
use App\Http\Controllers\PrestamosController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('modulos.ingresar');
});

Auth::routes();

Route::get('Inicio',[InicioController::class, 'index']);

Route::get('Mis-Datos', [UsuariosController::class, 'MisDatos']);
Route::put('Mis-Datos', [UsuariosController::class, 'DatosUpdate']);


Route::get('Usuarios', [UsuariosController::class, 'index'])->middleware(['can:listar usuarios']);
Route::post('Usuarios', [UsuariosController::class, 'store'])->name('usuarios.store')->middleware(['can:crear usuarios']);
Route::get('Usuario-Eliminado/{id}', [UsuariosController::class, 'destroy'])->middleware(['can:eliminar usuarios']);
Route::get('Editar-Usuario/{id}', [UsuariosController::class, 'edit'])->name('usuarios.edit')->middleware(['can:editar usuarios']);
Route::put('actualizar-Usuario/{id}', [UsuariosController::class, 'update'])->name('usuarios.update')->middleware(['can:editar usuarios']);



Route::get('Alumnos', [AlumnosController::class, 'index'])->middleware(['can:listar alumnos']);
Route::post('Alumnos', [AlumnosController::class, 'store'])->middleware(['can:crear alumnos']);
Route::get('Editar-Alumno/{id}', [AlumnosController::class, 'edit'])->name('alumnos.edit')->middleware(['can:editar alumnos']);
Route::put('actualizarA/{id}', [AlumnosController::class, 'update'])->middleware(['can:editar alumnos']);
Route::get('Alumno-Eliminado/{id}', [AlumnosController::class, 'destroy'])->middleware(['can:eliminar alumnos']);

Route::get('Generos', [GeneroController::class, 'index'])->middleware(['can:listar generos']);
Route::post('Generos', [GeneroController::class, 'store'])->middleware(['can:crear generos']);
Route::put('Actualizar-Genero/{genero}', [GeneroController::class, 'update'])->middleware(['can:actualizar generos']);
Route::get('Genero-Eliminado/{id}', [GeneroController::class, 'destroy'])->middleware(['can:actualizar generos']);
Route::get('Genero-Libros/{idGenero}', [GeneroController::class, 'GeneroLibros']); // generos

Route::get('Autores', [AutoresController::class, 'index'])->middleware(['can:listar autores']);
Route::get('Agregar-Autor', [AutoresController::class, 'create'])->middleware(['can:crear autores']);
Route::post('Agregar-Autor', [AutoresController::class, 'store'])->middleware(['can:agregar autores']);
Route::delete('Autor-Eliminado/{autor}', [AutoresController::class, 'destroy'])->middleware(['can:eliminar autores']);
Route::get('Autor-Libros/{idAutor}', [AutoresController::class, 'AutorLibros']); // autores

Route::get('Libros', [LibroController::class, 'index'])->middleware(['can:listar libros']);
Route::post('Libros', [LibroController::class, 'store'])->middleware(['can:crear libros']);
Route::get('Libro-S/{id}', [LibroController::class, 'show'])->name('libros.show'); // libros
Route::get('EditarLibro/{id}', [LibroController::class, 'edit'])->name('libros.edit')->middleware(['can:editar libros']);
Route::put('Libro-Act/{id}', [LibroController::class, 'update'])->middleware(['can:editar libros']);
Route::get('EliminarLibro/{id}', [LibroController::class, 'destroy'])->middleware(['can:eliminar libros']);



Route::post('Crear-Prestamos', [AlumnosController::class, 'PrestamoAlumno'])->middleware(['can:crear alumnos']); // SE DUPLICA NOMBRE DE RUTA





Route::get('Crear-Prestamos', [PrestamosController::class, 'create'])->middleware(['can:crear prestamos']);
Route::post('Crear-Prestamos', [PrestamosController::class, 'store'])->middleware(['can:crear prestamos']);
Route::get('Ver-Prestamo/{id}', [PrestamosController::class, 'VerPrestamo'])->middleware(['can:ver prestamos']);




Route::get('Prestamo/{id}', [PrestamosController::class, 'venta'])->middleware(['can:crear prestamos']);
Route::post('Prestamo/{id}', [PrestamosController::class, 'AñadirPrestamo'])->middleware(['can:crear prestamos']);



Route::post('Quitar-Libro-Prestamo/{id}', [PrestamosController::class, 'QuitarLibroPrestamo'])->middleware(['can:crear prestamos']);
Route::post('FinalizarPrestamo', [PrestamosController::class, 'FinalizarPrestamo'])->middleware(['can:finalizar prestamos']);
Route::get('Ver-Prestamos', [PrestamosController::class, 'VerPrestamos'])->middleware(['can:ver prestamos']);


