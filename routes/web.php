<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [UserController::class, 'index'])->name('index');
Route::get('create', [UserController::class, 'create'])->name('user.store');
Route::post('create', [UserController::class, 'store']);

//get single profile
Route::get('user/{id}', [UserController::class, 'show'])->name('user.show');
//Update profile picture
Route::get('edit', [UserController::class, 'edit'])->name('user.edit');
Route::post('update', [UserController::class, 'update'])->name('user.update');
