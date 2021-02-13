<?php

use App\Http\Controllers\ContactanosController;
use App\Mail\FormularioMailable;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;

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
Route::view("/","index");
Route::view("index","index");
Route::view("contacto","contacto");


Route::get("contacto",[ContactanosController::class,"index"])->name("contacto.index");
Route::post("contacto",[ContactanosController::class,"store"])->name("contacto.store");