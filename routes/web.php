<?php

use App\Http\Controllers\KuisController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LupaPasswordController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Konten_controller;
use App\Models\TipeKonten;
use App\Http\Controllers\QnaController;
use Illuminate\Support\Facades\Schema;

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
    Route::permanentRedirect('/','login');
    // Route::get('login', [LoginController::class, 'login']);
    // Route::get('/masuk', [App\Http\Controllers\Auth\LoginController::class, 'masukLogin'])->name('masuk');
    Route::get('logout', [LoginController::class, 'logout']);
    //route dasar tanpa cek status
});

Route::middleware(['auth', 'status:admin'])->group(function () {
    Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::resource('konten', Konten_controller::class);
    Route::get('/kuisAdmin/{id}/edit', [KuisController::class, 'edit']);
    Route::put('/kuisAdmin/{id}', [KuisController::class, 'update'])->name('kuis.update');
    //ini route semua halaman admin
});

Route::middleware(['auth', 'status:pengguna'])->group(function () {
    Route::prefix('index')->group(function () {
        Route::get('/', [App\Http\Controllers\IndexController::class, 'index'])->name('index');
        $isTableTipeKontenListExist = Schema::hasTable('tipe_konten');
        if ($isTableTipeKontenListExist) {
            $tipeKontenList = TipeKonten::all();
            foreach ($tipeKontenList as $key => $value) {
                Route::get($value->tipe_konten, [App\Http\Controllers\Konten_controller::class, 'index' . ucwords($value->tipe_konten)])->name($value->tipe_konten);
                Route::get($value->tipe_konten . '/{id}', [App\Http\Controllers\Konten_controller::class, 'show' . ucwords($value->tipe_konten)]);
            }
        }
        Route::post('/search',[EmployeeController::class,'searchTontonan'])->name('tontonan.cari');
        Route::post('berita/{id}/proses', [Konten_controller::class, 'komenBerita']);
        Route::get('berita/{id}/like', [Konten_controller::class, 'likeBerita']);
        Route::get('berita/{id}/dislike', [Konten_controller::class, 'dislikeBerita']);
        Route::post('podcast/{id}/proses', [Konten_controller::class, 'komenPodcast']);
        Route::get('podcast/{id}/like', [Konten_controller::class, 'likePodcast']);
        Route::get('podcast/{id}/dislike', [Konten_controller::class, 'dislikePodcast']);
        Route::post('tontonan/{id}/proses', [Konten_controller::class, 'komenTontonan']);
        Route::get('tontonan/{id}/like', [Konten_controller::class, 'likeTontonan']);
        Route::get('tontonan/{id}/dislike', [Konten_controller::class, 'dislikeTontonan']);
        //route qna dpindahkan 
        Route::get('/qna', [QnaController::class, 'index']);
        Route::post('/qna-baru', [QnaController::class, 'store']);
        // Route::post('/komentar-qna/{$id}/tes', [QnaController::class, 'komenQna']);
        //Route::post('/komentar-qna/{$id}', [QnaController::class, 'komenQna']);//->name('komentar-qna');
        Route::post('/komentar-qna/{id}/tes', [QnaController::class, 'komenQna'])->name('komentar-qna');
    });
    Route::get('/profil', [App\Http\Controllers\IndexController::class, 'editp'])->name('profil');
    Route::patch('profile/update', [App\Http\Controllers\IndexController::class, 'updatep'])->name('profil.update');
    Route::post('profile/update-password', [App\Http\Controllers\IndexController::class, 'updatePw'])->name('profile.updatePw');
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


Route::get('/berita', function () {

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

// Handle form submission


//ini route semua QNA user
// Route::get('/qna', function () {

//     return view('qna/qna2');
// });
//tempat semula untuk seluruhroute QNA



Route::get('/layanan', function () {

    return view('layanan/layanan');
});
