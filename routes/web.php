<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LupaPasswordController;
use Auth;

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

Auth::routes();
Route::middleware(['auth'])->group(function () {
    Route::get('/login', function () {return view('auth.login');});

    //semua route dalam grup ini hanya bisa diakses siswa - siswa
});

Route::middleware(['auth', 'status:admin'])->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    //semua route dalam grup ini hanya bisa diakses oleh operator
});

Route::middleware(['auth', 'status:pengguna'])->group(function () {
    Route::get('/index', [App\Http\Controllers\IndexController::class, 'index'])->name('index');

    //semua route dalam grup ini hanya bisa diakses siswa
});







Auth::routes();
Route::get('/', function () {return view('auth.login');});
Route::get('/daftar', function () {return view('auth.login');});
Route::get('/lupa-password', [LupaPasswordController::class, 'index'])->name('lupa-password');

Route::get('/masuk', function () {

    return view('login');
});

Route::get('/', function () {

    return view('auth/login');
});

Route::get('/logins', function () {

    return view('login');
});

Route::get('/test', function () {

    return view('loginhomepage');
});

// Route::get('/navbar', function () {

//     return view('navbar/navbar');
// });

//ini route beranda

Route::get('/beranda', function () {

    return view('beranda/beranda');
});

Route::get('/podcast', function () {

    return view('beranda/podcast');
});
Route::get('/list_podcast', function () {

    return view('beranda/list_podcast');
});
Route::get('/tontonan', function () {

    return view('beranda/tontonan');
});


Route::get('/berita', function(){

    return view('berita.semuaberita');
});
Route::get('/berita', function () {

    return view('beranda/berita');
});
Route::get('/list_berita', function () {

    return view('beranda/list_berita');
});

//ini route semua kuis

Route::get('/kuis', function () {

    return view('kuis/kuis');
});

//ini route semua QNA
Route::get('/qna', function () {

    return view('qna/qna');
});

//ini route halaman layanan
Route::get('/layanan', function () {

    return view('layanan/layanan');
});

//ini route profile

Route::get('/profil', function () {

    return view('profil/profil');
});

//ini route semua halaman admin
Route::get('/admin', function () {

    return view('admin/layouts/navbar_admin');
});

Route::get('/admin/tontonan', function () {

    return view('admin/beranda/tambah_tontonan');
});


