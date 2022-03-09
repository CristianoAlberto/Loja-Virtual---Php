<?php

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
use App\Http\Controllers\ProdutoController;

Route::get('/',[ProdutoController::class,'index01']);

Route::get('/events/index',[ProdutoController::class,'index']);


Route::get('/logar',function(){
    return view('logar');
});
Route::get('/cadastrar',function(){
    return view('cadastrarUsuario');
});
Route::get('/events/create',[ProdutoController::class,'create']);

Route::get('events/show/{id}',[ProdutoController::class,'show']);
Route::post('/cadastrarP',[ProdutoController::class,'store']);
//Route::post('/pesquisarP',[ProdutoController::class,'show']);






