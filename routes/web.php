<?php

use App\Http\Controllers\PendataanController;
use App\Http\Controllers\AuthmodelController;
use App\Http\Controllers\GambarmodelController;
use App\Http\Controllers\LowonganController;
use App\Http\Controllers\TimController;
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

// Route::get('/', function () {
//     return view('index');
// });

//CRUD
Route::get('/', [PendataanController::class,'index']);
Route::get('/FPendataan', [PendataanController::class,'create']);
Route::post('/store', [PendataanController::class,'store']);
Route::get('/editadmin/{id}', [PendataanController::class,'show'])->middleware('auth');
Route::post('/update/{id}', [PendataanController::class,'update']);
Route::get('/destroyadmin/{id}', [PendataanController::class,'destroyadmin']);
Route::get('/Fadmin', [PendataanController::class,'admin'])->middleware('auth');

//Login
Route::get('/login', [AuthmodelController::class,'loginuser'])->name('login');
Route::get('/registrasi', [AuthmodelController::class,'register']);
Route::post('/registrasi', [AuthmodelController::class,'registerstore'])->name('registrasiPost');
Route::post('/userlogin', [AuthmodelController::class,'loginuserstore'])->name('loginPost');
Route::post('/logout', [AuthmodelController::class,'logout'])->name('logoutPost');

//Uploda Gambar
Route::get('/datagambar', [GambarmodelController::class,'datagambar'])->middleware('auth');
Route::get('/editgambar/{id}', [GambarmodelController::class,'edit'])->middleware('auth');
Route::post('/upload', [GambarmodelController::class,'upload']);
Route::post('/updateimage/{id}', [GambarmodelController::class,'updategambar']);
Route::get('/hapusgambar/{id}', [GambarmodelController::class,'destroyimage']);

//Lowongan
Route::get('/lowongan', [LowonganController::class,'indexlowongan'])->middleware('auth');
Route::get('/inputlowongan', [LowonganController::class,'createlowongan'])->middleware('auth');
Route::post('/storelowongan', [LowonganController::class,'storelowongan']);
Route::get('/edit/{id}', [LowonganController::class,'edit'])->middleware('auth');
Route::post('/updatelowongan/{id}', [LowonganController::class,'update']);
Route::get('/destroy/{id}', [LowonganController::class,'destroy']);

//Tim
Route::get('/tim', [TimController::class,'indextim'])->middleware('auth');
Route::get('/inputtim', [TimController::class,'createtim'])->middleware('auth');
Route::post('/storetim', [TimController::class,'storetim']);
Route::get('/edittim/{id}', [TimController::class,'edittim'])->middleware('auth');
Route::post('/updatetim/{id}', [TimController::class,'updatetim']);
Route::get('/destroytim/{id}', [TimController::class,'destroytim']);
