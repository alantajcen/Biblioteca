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

Route::get('Usuarios', [UsuariosController::class, 'index']);
Route::post('Usuarios', [UsuariosController::class, 'store'])->name('usuarios.store');
Route::get('Usuario-Eliminado/{id}', [UsuariosController::class, 'destroy']);
Route::get('Editar-Usuario/{id}', [UsuariosController::class, 'edit'])->name('usuarios.edit');
Route::put('actualizar-Usuario/{id}', [UsuariosController::class, 'update'])->name('usuarios.update');

Route::get('Alumnos', [AlumnosController::class, 'index']);
Route::post('Alumnos', [AlumnosController::class, 'store']);
Route::get('Editar-Alumno/{id}', [AlumnosController::class, 'edit'])->name('alumnos.edit');
Route::put('actualizarA/{id}', [AlumnosController::class, 'update']);
Route::get('Alumno-Eliminado/{id}', [AlumnosController::class, 'destroy']);
Route::post('Crear-Prestamos', [AlumnosController::class, 'PrestamoAlumno']);


Route::get('Generos', [GeneroController::class, 'index']);
Route::post('Generos', [GeneroController::class, 'store']);
Route::put('Actualizar-Genero/{genero}', [GeneroController::class, 'update']);
Route::get('Genero-Eliminado/{id}', [GeneroController::class, 'destroy']);
Route::get('Genero-Libros/{idGenero}', [GeneroController::class, 'GeneroLibros']);

Route::get('Autores', [AutoresController::class, 'index']);
Route::get('Agregar-Autor', [AutoresController::class, 'create']);
Route::post('Agregar-Autor', [AutoresController::class, 'store']);
Route::delete('Autor-Eliminado/{autor}', [AutoresController::class, 'destroy']);
Route::get('Autor-Libros/{idAutor}', [AutoresController::class, 'AutorLibros']);

Route::get('Libros', [LibroController::class, 'index']);
Route::post('Libros', [LibroController::class, 'store']);
Route::get('Libro-S/{id}', [LibroController::class, 'show'])->name('libros.show');
Route::get('EditarLibro/{id}', [LibroController::class, 'edit'])->name('libros.edit');
Route::put('Libro-Act/{id}', [LibroController::class, 'update']);
Route::get('EliminarLibro/{id}', [LibroController::class, 'destroy']);

Route::get('Crear-Prestamos', [PrestamosController::class, 'create']);
Route::post('Crear-Prestamos', [PrestamosController::class, 'store']);
Route::get('Prestamo/{id}', [PrestamosController::class, 'venta']);
Route::post('Prestamo/{id}', [PrestamosController::class, 'AñadirPrestamo']);
Route::post('Quitar-Libro-Prestamo/{id}', [PrestamosController::class, 'QuitarLibroPrestamo']);
Route::post('FinalizarPrestamo', [PrestamosController::class, 'FinalizarPrestamo']);
Route::get('Ver-Prestamos', [PrestamosController::class, 'VerPrestamos']);
Route::get('Ver-Prestamo/{id}', [PrestamosController::class, 'VerPrestamo']);

