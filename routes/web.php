<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AcercaController;
use App\Http\Controllers\AccesoController;
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\CitasController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/acerca',[AcercaController::class,'sobre_acerca']);

Route::get('/auth/logout',[AccesoController::class,'logout'])
    ->name('auth.logout');
Route::post('/auth/new',[AccesoController::class,'save'])
    ->name('auth.new');
Route::post('/auth/access',[AccesoController::class,'ingresar'])
    ->name('auth.check');


Route::group(['middleware'=>['AuthCheck']], function (){
    Route::get('/auth/login',[AccesoController::class,'login'])
        ->name('auth.login');
    Route::get('/auth/register',[AccesoController::class,'register'])
        ->name('auth.registro');
    Route::get('/admin/index',[ClientesController::class,'index'])
        ->name('inicio');
    Route::resource('/admin/citas',CitasController::class);
});
