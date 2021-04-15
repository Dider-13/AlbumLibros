<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlbumController;
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

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/',[AlbumController::class,'welcome']);

Route::resource('album','App\Http\Controllers\AlbumController');

Route::get('/index',[AlbumController::class,'index']);

Route::get('/show/{id}', [AlbumController::class, 'libroShow'])->name('show');

//Ruta para imprimir pdf
Route::get('makePDF', [AlbumController::class, 'makePDF'])->name('makePDF');

//Ruta de la imagen
Route::get('/storage {Portada}', [AlbumController::class, 'store'])->name('imagen');

//ruta para la autentificación
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

