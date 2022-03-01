<?php

use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\Admin\HomeController::class, 'index'])->middleware('can:admin.home')->name('admin.home');
Route::resource('users', App\Http\Controllers\Admin\UserController::class)->names('admin.users');
Route::resource('roles', App\Http\Controllers\Admin\RoleController::class)->names('admin.roles');

// ruta de administracion
Route::resource('configuracion', App\Http\Controllers\Admin\ConfiguracionController::class)->names('admin.configuracion');
Route::resource('categoria', App\Http\Controllers\Admin\CategoriaController::class)->names('admin.categoria');
Route::resource('producto', App\Http\Controllers\Admin\ProductoController::class)->names('admin.producto');
Route::resource('post', App\Http\Controllers\Admin\PostController::class)->names('admin.post');

Route::resource('carrucel', App\Http\Controllers\Admin\CarruselController::class)->names('admin.carrucel');
Route::resource('empresa', App\Http\Controllers\Admin\EmpresaController::class)->names('admin.empresa');

Route::resource('empresas', App\Http\Controllers\Admin\EmpresasController::class)->names('admin.empresas');
Route::resource('uploads', App\Http\Controllers\Admin\UploadsController::class)->names('admin.uploads');
Route::get('uploads/{uuid}/download', [App\Http\Controllers\Admin\UploadsController::class, 'download'])->name('admin.download');

//Notificaciones
Route::middleware(['auth:sanctum', 'verified'])->get('dashboard',[DashboardController::class, 'index'])->name('admin.dashboard');

Route::get('messages/{message}', [ App\Http\Controllers\Admin\MessageController::class, 'show'])->name('admin.messages.show');
Route::post('messages', [App\Http\Controllers\Admin\MessageController::class, 'store'])->name('messages.store');
