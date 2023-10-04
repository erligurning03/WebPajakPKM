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

    return view('login');
});

Route::get('/test', function () {

    return view('loginhomepage');
});

Route::get('/navbar', function () {

    return view('navbar/navbar');
});
Route::get('/podcast', function () {

    return view('beranda/podcast');
});


Auth::routes();
Route::get('/lupa-password', [LupaPasswordController::class, 'index'])->name('lupa-password');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


