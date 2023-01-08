<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdiController;
use App\Http\Controllers\MahasiswaController;

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
Route::get('/mahasiswa/index', [MahasiswaController::class, 'index'])->name('mahasiswa.index');
Route::get('/mahasiswa/create', [MahasiswaController::class, 'create'])->name('mahasiswa.create');
Route::get('/mahasiswa/{mahasiswa}/edit', [MahasiswaController::class, 'edit'])->name('mahasiswa.edit');
Route::post('/mahasiswa/store', [MahasiswaController::class, 'store'])->name('mahasiswa.store');
Route::patch('/mahasiswa/{mahasiswa}/update', [MahasiswaController::class, 'update'])->name('mahasiswa.update');
Route::get('/mahasiswa/{mahasiswa}/detail', [MahasiswaController::class, 'show'])->name('mahasiswa.detail');
Route::delete('/mahasiswa/{mahasiswa}/delete', [MahasiswaController::class, 'destroy'])->name('mahasiswa.destroy');

Route::get('/prodi/index', [ProdiController::class, 'index'])->name('prodi.index');
Route::get('/prodi/create', [ProdiController::class, 'create'])->name('prodi.create');
Route::get('/prodi/{prodi}/edit', [ProdiController::class, 'edit'])->name('prodi.edit');
Route::post('/prodi/store', [ProdiController::class, 'store'])->name('prodi.store');
Route::post('/prodi/{prodi}/update', [ProdiController::class, 'update'])->name('prodi.update');
Route::delete('/prodi/{prodi}/delete', [ProdiController::class, 'destroy'])->name('prodi.destroy');
