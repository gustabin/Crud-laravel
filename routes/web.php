<?php

use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PagesController::class, 'inicio'])->name('inicio');

Route::get('/detalle/{id}', [PagesController::class, 'detalle'])->name('notas.detalle');

Route::post('/crear', [PagesController::class, 'crear'])->name('notas.crear');

Route::get('/editar/{id}', [PagesController::class, 'editar'])->name('notas.editar');

Route::put('/editar/{id}', [PagesController::class, 'update'])->name('notas.update');

Route::delete('/eliminar/{id}', [PagesController::class, 'eliminar'])->name('notas.eliminar');

Route::get('/fotos', [PagesController::class, 'fotos'])->name('fotos');

Route::get('/blog', [PagesController::class, 'blog'])->name('blog');

Route::get('/nosotros/{nombre?}', [PagesController::class, 'nosotros'])->name('nosotros');
// Route::get('fotos', [PagesController::class, 'fotos']);


// Route::get('bienvenido', function () {
//     return "hola!";
// });

// Route::get('fotos/{numero?}', function ($numero = "Sin número") {
//     return "Estas en la galería de fotos: " . $numero;
// })->where('numero', '[0-9]+');

//Route::view('galeria', 'fotos', ['numero' => '125']);

//Route::get('fotos', 'PagesController@fotos')->name('fotos');
//Route::get('fotos', [PagesController::class, 'fotos']);


// Route::get('blog', function () {
//     return view('blog');
// })->name('blog');
