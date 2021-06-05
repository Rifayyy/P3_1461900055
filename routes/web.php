<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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
route::get('/plat',[UserController::class,'index']);
route::get('/plat/tambah',[UserController::class,'tambah']);
route::get('/plat/hapus{id}',[UserController::class,'hapus']);
route::get('/plat/cari',[UserController::class,'cari']);
route::post('/plat/store',[UserController::class,'store']);
route::get('/plat/edit/{id}',[UserController::class,'edit']);
route::post('/plat/update',[UserController::class,'update']);