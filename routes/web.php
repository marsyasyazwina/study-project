<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KelasController;


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

// route halaman pertama/welcome
Route::get('/', [HomeController::class, 'index']);

//untuk menampilkan data
Route::get('/kelas', [KelasController::class, 'index']);

//untuk menampilkan data yang dipilih
Route::get('/kelas/{Id}', [KelasController::class, 'index']);

//mengarahkan untuk menampilkan tampilan create
Route::get('/kelas/data/create', [KelasController::class, 'create']);

//untuk menyimpan data ke db
Route::post('/kelas', [KelasController::class, 'store']);

//untuk menampilkan view form data edit
Route::get('/kelas/{Id}/edit', [KelasController::class, 'edit']);

//mengupdate data ke db
Route::put('/kelas/{Id}', [KelasController::class, 'update']);

//mendelete data
Route::delete('/kelas/{Id}', [KelasController::class, 'destroy']);

