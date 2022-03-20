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

//routas get

Route::get('/',[ProdutoController::class,'index01']);
Route::get('/events/index',[ProdutoController::class,'index']);
Route::get('/events/update/{id}',[ProdutoController::class,'up']);
Route::get('/events/destroy/{id}',[ProdutoController::class,'des']);

Route::get('/logar',function(){
    return view('logar');
});
Route::get('/cadastrar',function(){
    return view('cadastrarUsuario');
});
Route::get('/events/create',[ProdutoController::class,'create']);
Route::get('events/show/{id}',[ProdutoController::class,'show']);


//routas post_inserir
Route::post('/cadastrarP',[ProdutoController::class,'store']);

//routas put_actualizar
/*atenção usei o post nu lugar do put pois nos formularios html ainda não descobri como se faz um put
ai so tem post ou get*/
Route::post('/updateP/{id}',[ProdutoController::class,'update']);

//routas delete
Route::delete('produto/{id}',[ArtigoController::class,'destroy']);















Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
