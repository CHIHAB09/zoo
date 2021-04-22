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
    $animalSoin->name = 'Tomy le Gorille';
    $animalSoin->dateEntrer = '04-04-2001';
    $animalSoin->dateSortie = '';
    $animalSoin->dateSortie = '07-02-1997';
    $animalSoin->sexe = 'Femelle';
    $animalSoin->poids = '241kg';
    $animalSoin->sortieCage = 1;

    $animalSoin->save();

    $medicaux= new App\Models\Medicals();
    $medicaux->rapportMedical ="Deuxieme diagnostic";
    $medicaux->dateRapport = '2021-04-22';
    $medicaux->animal_id = 2;

    $medicaux->save(); 

});

/* Route::get('/posts', function() {
    return response()->json([
        'title' => 'Test de route avec json',
        'description' => 'different chemin'
    ]);
});
*/
