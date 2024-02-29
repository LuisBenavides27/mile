<?php

use App\Http\Controllers\NivelsController;
use Illuminate\Support\Facades\Route;

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

Route::view('/errors/database', 'errors.database')->name('errors.database');

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')->middleware(['auth', 'verified'])->name('dashboard');

Route::view('profile', 'profile')->middleware(['auth'])->name('profile'); 

Route::get('nivels', [NivelsController::class, 'index'])->middleware(['auth'])->name('nivels'); 

Route::get('panel', [NivelsController::class, 'panel'])->middleware(['auth'])->name('panel'); 

Route::get('live', [NivelsController::class, 'live'])->middleware(['auth'])->name('live'); 

Route::get('users', [NivelsController::class, 'users'])->middleware(['auth'])->name('users'); 

Route::get('sex', [NivelsController::class, 'sex'])->middleware(['auth'])->name('sex'); 

Route::get('test',[NivelsController::class,'test'])->name('test');    

Route::post('niveluno', [NivelsController::class,'niveluno'])->name('niveluno')->middleware('auth'); 

require __DIR__.'/auth.php';