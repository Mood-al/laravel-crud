<?php

use App\Http\Controllers\PizzaController;
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
Route::get('/', function() {
    return view('welcome');
  });

Route::get('/pizza', [PizzaController::class , 'index']);
Route::post('/pizza', [PizzaController::class , 'store']);
Route::get('/pizza/create',[PizzaController::class , 'create']);

Route::delete('/pizza/{id}',[PizzaController::class , 'destroy']);
Route::get('/pizza/{id}' , [PizzaController::class , 'show']);