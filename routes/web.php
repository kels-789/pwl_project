<?php

use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\MataKuliahController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\KRSController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing', [
        'user' => Auth::user(),
    ]);
})->name('landing');

Route::middleware('auth')->group(function(){
Route::get('/mahasiswa', [MahasiswaController::class, 'index'])->name('mahasiswa.index');
Route::get('/mahasiswa-create', [MahasiswaController::class, 'create'])->name('mahasiswa.add');
Route::post('/mahasiswa', [MahasiswaController::class, 'store'])->name('mahasiswa.save');
Route::get('/mahasiswa-edit/{id}', [MahasiswaController::class, 'edit'])->name('mahasiswa.update');
Route::put('/mahasiswa/{id}', [MahasiswaController::class, 'update'])->name('mahasiswa.edit');
Route::delete('/mahasiswa/{id}', [MahasiswaController::class, 'destroy'])->name('mahasiswa.delete');

Route::get('/dosen', [DosenController::class, 'index']);
Route::get('/dosen-create', [DosenController::class, 'create'])->name('dosen.add');
Route::post('/dosen', [DosenController::class, 'store'])->name('dosen.save');
Route::get('/dosen-edit/{id}', [DosenController::class, 'edit'])->name('dosen.update');
Route::put('/dosen/{id}', [DosenController::class, 'update'])->name('dosen.edit');
Route::delete('/dosen/{id}', [DosenController::class, 'destroy'])->name('dosen.delete');

Route::get('/matakuliah', [MataKuliahController::class, 'index']);
Route::get('/matakuliah-create', [MataKuliahController::class, 'create'])->name('matakuliah.add');
Route::post('/matakuliah', [MataKuliahController::class, 'store'])->name('matakuliah.save');
Route::get('/matakuliah-edit/{id}', [MataKuliahController::class, 'edit'])->name('matakuliah.update');
Route::put('/matakuliah/{id}', [MataKuliahController::class, 'update'])->name('matakuliah.edit');
Route::delete('/matakuliah/{id}', [MataKuliahController::class, 'destroy'])->name('matakuliah.delete');

Route::get('/jurusan', [JurusanController::class, 'index']);
Route::get('/jurusan-create', [JurusanController::class, 'create'])->name('jurusan.add');
Route::post('/jurusan', [JurusanController::class, 'store'])->name('jurusan.save');
Route::get('/jurusan-edit/{id}', [JurusanController::class, 'edit'])->name('jurusan.update');
Route::put('/jurusan/{id}', [JurusanController::class, 'update'])->name('jurusan.edit');
Route::delete('/jurusan/{id}', [JurusanController::class, 'destroy'])->name('jurusan.delete');

Route::resource('/kelas', KelasController::class);
Route::resource('/krs', KRSController::class);
});

Route::get('/register', [AuthController::class, 'registerView']);
Route::post('/register', [AuthController::class, 'register'])->name('register');

Route::get('/login', [AuthController::class, 'loginView']);
Route::post('/login', [AuthController::class, 'login'])->name('login');