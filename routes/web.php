<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LupaPasswordController;

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

Route::get('/', function () {

    return view('auth/login');
});

Route::get('/logins', function () {

    return view('login');
});

Route::get('/test', function () {

    return view('loginhomepage');
});

Route::get('/navbar', function () {

    return view('navbar/navbar');
});

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

<<<<<<< Updated upstream
=======
<<<<<<< HEAD
Route::get('/berita', function(){

    return view('berita.semuaberita');
});

=======
Route::get('/berita', function () {

    return view('beranda/berita');
});
Route::get('/list_berita', function () {

    return view('beranda/list_berita');
});

//ini route semua kuis

>>>>>>> 6c8db20255fc065607bc8e04778728b42a4242e5
>>>>>>> Stashed changes
Route::get('/kuis', function () {

    return view('kuis/kuis');
});

Route::get('/qna', function () {

    return view('qna/qna');
});
Route::get('/layanan', function () {

    return view('layanan/layanan');
});

Route::get('/profil', function () {

    return view('profil/profil');
});
Route::get('/admin', function () {

    return view('admin/layouts/navbar_admin');
});

Route::get('/admin/tontonan', function () {

    return view('admin/beranda/tambah_tontonan');
});


Auth::routes();
Route::get('/lupa-password', [LupaPasswordController::class, 'index'])->name('lupa-password');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


