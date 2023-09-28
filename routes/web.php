<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UasController;
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
Route::get('/datatable', function () {
    return view('datatable.index');
});

//CRUD CAST
Route::get('/Npm21312026', [UasController::class, 'index']);
Route::post('/Npm21312026', [UasController::class, 'store']);
Route::get('/Npm21312026/create', [UasController::class, 'create']);
Route::get('/Npm21312026/{Npm21312026_id}/edit', [UasController::class, 'edit']);
Route::put('/Npm21312026/{Npm21312026_id}', [UasController::class, 'update']);
Route::delete('/Npm21312026/{Npm21312026_id}', [UasController::class, 'destroy']);
