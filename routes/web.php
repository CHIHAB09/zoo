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
Route::get('/medical', function () {

    $animalSoin= new App\Models\Animaux();
    $animalSoin->name = "Tomy le Gorille";

    $medicaux= new App\Models\Medicals();
    $medicaux->rapportMedical ="Premier diagnostic";
    $medicaux->dateRapport = '2021-04-22';
    $medicaux->animal_id = 5;

    $medicaux->save(); 
    var_dump($medicaux);
});

/* Route::get('/posts', function() {
    return response()->json([
        'title' => 'Test de route avec json',
        'description' => 'different chemin'
    ]);
});
*/
