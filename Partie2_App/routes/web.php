<?php

use App\Http\Controllers\AdminModelController;
use App\Http\Controllers\EtudiantModelController;
use App\Http\Controllers\FormateurModelController;
use App\Http\Controllers\FormationModelController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::resource('dashbord', AdminModelController::class);
Route::resource('etudiants', EtudiantModelController::class);
Route::resource('formateurs', FormateurModelController::class);
Route::resource('formations', FormationModelController::class);

