<?php

use App\Http\Controllers\NegaraController;
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
// Kelompok
// Radika Tripena Lubis
// Rifky Al farezal


Route::resource('/negara', NegaraController::class);
Route::resource('/', NegaraController::class);
