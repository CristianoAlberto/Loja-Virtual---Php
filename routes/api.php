<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Resource\Artigo as ArtigoResource;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
use App\Http\Controllers\api\DogController;
use App\Http\Controllers\ArtigoController;

//listar artigos
Route::get('artigos', [ArtigoController::class,'index']);

//Listar um unico artigo
Route::get('artigo/{id}',[ArtigoController::class, 'show']);

//Criar artigo
Route::post('artigo',[ArtigoController::class,'store']);

//Update artigo
Route::put('artigo/{id}',[ArtigoController::class,'update']);

//Deletar artigo
Route::delete('artigo/{id}',[ArtigoController::class,'destroy']);
