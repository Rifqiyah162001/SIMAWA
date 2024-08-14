<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\RoleUser;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\KategoriKegiatanController;
use App\Http\Controllers\JenisKegiatanController;
use App\Http\Controllers\JenisTahapanController;
use App\Http\Controllers\BuatKegiatanController;
use App\Http\Controllers\PendanaanAdminController;
use App\Http\Controllers\PendanaanMahasiswaController;
use App\Http\Controllers\PenerimaanProposalController;
use App\Http\Controllers\ListBeasiswaController;
use App\Http\Controllers\ListBeasiswaMahasiswaController;
use App\Http\Controllers\PenilaianController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('auth/login');
});

Route::post('/login', [LoginController::class, 'postLogin'])->name('postlogin');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::group(['middleware' => ['auth', 'RoleUser:admin']], function(){
    Route::get('/admin', function () {
        return view('admin.home');
    });

    Route::resource('kategorikegiatan', KategoriKegiatanController::class);
});

Route::group(['middleware' => ['auth', 'RoleUser:mahasiswa']], function(){
    Route::get('/mahasiswa', function () {
        return view('mahasiswa/dashboard');
    });
});

Route::group(['middleware' => ['auth', 'RoleUser:reviewer']], function(){
    Route::get('/reviewer', function () {
        return view('reviewer/dashboard');
    });
});

Route::resource('kategorikegiatan', KategoriKegiatanController::class);
Route::resource('jeniskegiatan', JenisKegiatanController::class);
Route::resource('jenistahapan', JenisTahapanController::class);
Route::resource('buatkegiatan', BuatKegiatanController::class);
Route::resource('pendanaan', PendanaanAdminController::class);

// ini untuk mahasiswa, nanti buat 'mahasiswa/pendanaanmahasiswa
Route::resource('pendanaanmahasiswa', PendanaanMahasiswaController::class);
Route::resource('proposal', PenerimaanProposalController::class);

// route untuk tampilan usulan pendanaan admin
Route::get('admin/usulanPendanaan', [PenerimaanProposalController::class, 'adminIndex'])->name('admin.proposals.index');

// Route untuk meng-update status proposal
Route::post('admin/usulanPendanaan/{id}/status', [PenerimaanProposalController::class, 'updateStatus'])->name('admin.proposals.updateStatus');

// Route list beasiswa
Route::resource('listBeasiswa', ListBeasiswaController::class);
// Route list beasiswa mahasiswa
Route::resource('listBeasiswaMahasiswa', ListBeasiswaMahasiswaController::class);

// Route untuk penilaian reviewer, tapi ini masih belum dibuat
Route::resource('penilaian', PenilaianController::class);


