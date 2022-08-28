<?php

use App\Http\Controllers\RegisterController;
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
    return view('principal');
});

// Ruta que llama a un controlador y el nombre de la vista.
Route::get('/register', [RegisterController::class, 'index'])->name('register'); // Ahora se pueden usar enlaces con el helper route()
Route::post('/register', [RegisterController::class, 'store']);
