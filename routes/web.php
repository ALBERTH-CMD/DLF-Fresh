<?php

use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;

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

// rutas publicas

Route::get('', [App\Http\Controllers\FrontController::class, 'index'])->name('home');
Route::get('empresa', [App\Http\Controllers\FrontController::class, 'empresa'])->name('empresa');
Route::get('artesanias', [App\Http\Controllers\FrontController::class, 'artesanias'])->name('artesanias');
Route::get('artesanias/{categoria}', [App\Http\Controllers\FrontController::class, 'categoria']);
Route::get('artesanias/{categoria}/{producto}', [App\Http\Controllers\FrontController::class, 'producto']);
Route::get('blog', [App\Http\Controllers\FrontController::class, 'blog'])->name('blog');
Route::get('blog/{post}', [App\Http\Controllers\FrontController::class, 'post']);

Route::get('contacto', [App\Http\Controllers\FrontController::class, 'contacto'])->name('contacto');

Route::post('contacto', [App\Http\Controllers\FrontController::class, 'contactoenvio'])->name('front.contacto');

// Google login
Route::get('login/{drive}', [App\Http\Controllers\LoginController::class, 'redirectToProvider'])->name('login.google');
Route::get('login/{drive}/callback', [App\Http\Controllers\LoginController::class, 'handleProviderCallback']);
