<?php

use App\Http\Controllers\KuisController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LupaPasswordController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Konten_controller;

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
    Route::get('/', function () {return view('auth.login');});
    Route::get('logout', [LoginController::class,'logout']);
    //route dasar tanpa cek status
});

Route::middleware(['auth', 'status:admin'])->group(function () {
    Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

     //ini route semua halaman admin
    Route::resource('konten',Konten_controller::class);
        // Route::get('','index')->name('konten');
        // Route::create('','konten.create')->name('konten.create');
    //  Route::get('/admin', function () {return view('admin/layouts/navbar_admin');});
    //  Route::get('/admin/tontonan', function () {return view('admin/beranda/tambah_tontonan');});
    //  Route::get('/admin/tambahkuis', function () { return view('admin/beranda/tambah_kuis');});
    //  Route::post('admin/tambahkuis/post', [KuisController::class, 'createKuis']);
    //semua route dalam grup ini hanya bisa diakses oleh operator
});

Route::middleware(['auth', 'status:pengguna'])->group(function () {
    Route::get('/index', [App\Http\Controllers\IndexController::class, 'index'])->name('index');
    Route::get('/profil', [App\Http\Controllers\IndexController::class, 'editp'])->name('profil');
    Route::patch('profile/update', [App\Http\Controllers\IndexController::class, 'updatep'])->name('profil.update');
    Route::post('profile/update-password', [App\Http\Controllers\IndexController::class, 'updatePw'])->name('profile.updatePw');
    //berita
    Route::get('/index/berita', [App\Http\Controllers\Konten_controller::class, 'indexB'])->name('berita');
    Route::get('/index/berita/{id}',[App\Http\Controllers\Konten_controller::class, 'showB']);
    //podcast
    Route::get('/index/podcast', [App\Http\Controllers\Konten_controller::class, 'indexP'])->name('podcast');
    Route::get('/index/podcast/{id}',[App\Http\Controllers\Konten_controller::class, 'showP']);
    //tontonan
    Route::get('/index/tontonan', [App\Http\Controllers\Konten_controller::class, 'indexT'])->name('tontonan');
    Route::get('/index/tontonan/{id}',[App\Http\Controllers\Konten_controller::class, 'showT']);

    //semua route dalam grup ini hanya bisa diakses siswa
});

Route::get('/kuis', [KuisController::class, 'tampilLevel']);
Route::get('/kuis/{id}', [KuisController::class, 'tampilSoal']);
Route::post('/kuis/{id}/proseskuis', [KuisController::class, 'prosesKuis']);

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
// Show the edit form
Route::get('/kuisAdmin/{id}/edit', [KuisController::class, 'edit']);

// Handle form submission
Route::put('/kuisAdmin/{id}',[KuisController::class, 'update'])->name('kuis.update');

//ini route semua QNA
Route::get('/qna', function () {

    return view('qna/qna2');
});
Route::get('/layanan', function () {

    return view('layanan/layanan');
});

