<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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
    return view('welcome');
});
Route::get('/horaireParc', function () {
    return view('horaireParc');
})->name('horaire'); 
Route::get('/horaireAliment', function () {
    return view('horaireAliment');
});

/* Route::get('/posts', function() {
    return response()->json([
        'title' => 'Test de route avec json',
        'description' => 'different chemin'
    ]);
});
*/
