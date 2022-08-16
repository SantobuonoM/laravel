<?php
use App\Http\Controllers\PeliculasController;
use Illuminate\Support\Facades\Route;

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
    return ('asdasd');
});

Route::get('/peliculas', [PeliculasController::class, 'index']);
Route::get('/peliculas/create', [PeliculasController::class, 'create']);
Route::post('/peliculas/store', [PeliculasController::class, 'store']);
Route::get('/peliculas/{id}', [PeliculasController::class, 'show']);

