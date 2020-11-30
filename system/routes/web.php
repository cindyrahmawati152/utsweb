<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\KomentarController;
/*
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

Route::get('home', [HomeController::class, 'showHome']);
Route::get('blog', [HomeController::class, 'showBlog']);
Route::get('Dashboard', [HomeController::class, 'showDashboard']);
Route::get('Admin/Blog', [HomeController::class, 'showAdminBlog']);
Route::get('User', [HomeController::class, 'showUser']);

Route::get('Artikel', [ArtikelController::class, 'index']);
Route::get('Artikel/create', [ArtikelController::class, 'create']);
Route::post('Artikel', [ArtikelController::class, 'store']);
Route::get('Artikel/{artikel}', [ArtikelController::class, 'show']);
Route::get('Artikel/{artikel}/edit', [ArtikelController::class, 'edit']);
Route::put('Artikel/{artikel}', [ArtikelController::class, 'update']);
Route::delete('Artikel/{artikel}', [ArtikelController::class, 'destroy']);

Route::get('User', [UserController::class, 'index']);
Route::get('User/create', [UserController::class, 'create']);
Route::post('User', [UserController::class, 'store']);
Route::get('User/{user}', [UserController::class, 'show']);
Route::get('User/{user}/edit', [UserController::class, 'edit']);
Route::put('User/{user}', [UserController::class, 'update']);
Route::delete('User/{user}', [UserController::class, 'destroy']);

Route::get('Komentar', [KomentarController::class, 'index']);
Route::get('Komentar/create', [KomentarController::class, 'create']);
Route::post('Komentar', [KomentarController::class, 'store']);
Route::get('Komentar/{user}', [KomentarController::class, 'show']);
Route::get('Komentar/{user}/edit', [KomentarController::class, 'edit']);
Route::put('Komentar/{user}', [KomentarController::class, 'update']);
Route::delete('Komentar/{user}', [KomentarController::class, 'destroy']);



Route::get('template', function () {
  return view('admin.base');


});