<?php

use app\Http\Controllers\PersonasController;
use app\Http\Controllers\TransporteController;
use app\Http\Controllers\CamionController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layout/plantilla');
});

Route::get('/index', [\App\Http\Controllers\Controller::class, 'index'])->name('plantilla.index');

Route::get('/indextm', [\App\Http\Controllers\Controller::class, 'indextm'])->name('tipomercancias.indextm');
Route::get('/createtm', [\App\Http\Controllers\Controller::class, 'createtm'])->name('tipomercancias.createtm');
Route::post('/storetm', [\App\Http\Controllers\Controller::class, 'storetm'])->name('tipomercancias.storetm');
Route::get('/edittm/{id}', [\App\Http\Controllers\Controller::class, 'edittm'])->name('tipomercancias.edittm');
Route::put('/updatetm/{id}', [\App\Http\Controllers\Controller::class, 'updatetm'])->name('tipomercancias.updatetm');
Route::get('/showtm/{id}', [\App\Http\Controllers\Controller::class, 'showtm'])->name('tipomercancias.showtm');
Route::delete('/destroytm/{id}', [\App\Http\Controllers\Controller::class, 'destroytm'])->name('tipomercancias.destroytm');



Route::get('/indexm', [\App\Http\Controllers\Controller::class, 'indexm'])->name('mercancias.indexm');
Route::get('/createm', [\App\Http\Controllers\Controller::class, 'createm'])->name('mercancias.createm');
Route::post('/storem', [\App\Http\Controllers\Controller::class, 'storem'])->name('mercancias.storem');
Route::get('/editm/{id}', [\App\Http\Controllers\Controller::class, 'editm'])->name('mercancias.editm');
Route::put('/updatem/{id}', [\App\Http\Controllers\Controller::class, 'updatem'])->name('mercancias.updatem');
Route::get('/showm/{id}', [\App\Http\Controllers\Controller::class, 'showm'])->name('mercancias.showm');
Route::delete('/destroym/{id}', [\App\Http\Controllers\Controller::class, 'destroym'])->name('mercancias.destroym');


Route::get('/indexp', [\App\Http\Controllers\Controller::class, 'indexp'])->name('predios.indexp');
Route::get('/createp', [\App\Http\Controllers\Controller::class, 'createp'])->name('predios.createp');
Route::post('/storep', [\App\Http\Controllers\Controller::class, 'storep'])->name('predios.storep');
Route::get('/editp/{id}', [\App\Http\Controllers\Controller::class, 'editp'])->name('predios.editp');
Route::put('/updatep/{id}', [\App\Http\Controllers\Controller::class, 'updatep'])->name('predios.updatep');
Route::get('/showp/{id}', [\App\Http\Controllers\Controller::class, 'showp'])->name('predios.showp');
Route::delete('/destroyp/{id}', [\App\Http\Controllers\Controller::class, 'destroyp'])->name('predios.destroyp');


Route::get('/indext', [\App\Http\Controllers\Controller::class, 'indext'])->name('transportes.indext');
Route::get('/createt', [\App\Http\Controllers\Controller::class, 'createt'])->name('transportes.createt');
Route::post('/storet', [\App\Http\Controllers\Controller::class, 'storet'])->name('transportes.storet');
Route::get('/editt/{id}', [\App\Http\Controllers\Controller::class, 'editt'])->name('transportes.editt');
Route::put('/updatet/{id}', [\App\Http\Controllers\Controller::class, 'updatet'])->name('transportes.updatet');
Route::get('/showt/{id}', [\App\Http\Controllers\Controller::class, 'showt'])->name('transportes.showt');
Route::delete('/destroyt/{id}', [\App\Http\Controllers\Controller::class, 'destroyt'])->name('transportes.destroyt');

Route::get('/indexc', [\App\Http\Controllers\Controller::class, 'indexc'])->name('camiones.indexc');
Route::get('/createc', [\App\Http\Controllers\Controller::class, 'createc'])->name('camiones.createc');
Route::post('/storec', [\App\Http\Controllers\Controller::class, 'storec'])->name('camiones.storec');
Route::get('/editc/{id}', [\App\Http\Controllers\Controller::class, 'editc'])->name('camiones.editc');
Route::put('/updatec/{id}', [\App\Http\Controllers\Controller::class, 'updatec'])->name('camiones.updatec');
Route::get('/showc/{id}', [\App\Http\Controllers\Controller::class, 'showc'])->name('camiones.showc');
Route::delete('/destroyc/{id}', [\App\Http\Controllers\Controller::class, 'destroyc'])->name('camiones.destroyc');












//Route::get('/', [\App\Http\Controllers\PersonasController::class, 'index'])->name('personas.index');
//Route::get('/create', [\App\Http\Controllers\PersonasController::class, 'create'])->name('personas.create');
//Route::post('/store', [\App\Http\Controllers\PersonasController::class, 'store'])->name('personas.store');
//Route::get('/edit/{id}', [\App\Http\Controllers\PersonasController::class, 'edit'])->name('personas.edit');
//Route::put('/update/{id}', [\App\Http\Controllers\PersonasController::class, 'update'])->name('personas.update');
//Route::get('/show/{id}', [\App\Http\Controllers\PersonasController::class, 'show'])->name('personas.show');
//Route::delete('/destroy/{id}', [\App\Http\Controllers\PersonasController::class, 'destroy'])->name('personas.destroy');
//
//Route::get('/', [\App\Http\Controllers\TransporteController::class, 'indext'])->name('transportes.indext');
//Route::get('/createt', [\App\Http\Controllers\TransporteController::class, 'createt'])->name('transportes.createt');
//Route::post('/storet', [\App\Http\Controllers\TransporteController::class, 'storet'])->name('transportes.storet');
