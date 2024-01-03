<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EditController;
use App\Http\Controllers\DeleteController;
use App\Http\Controllers\IndexController;

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
    return view('welcome');
});
Route::get('/index', function () {
    return view('index');
});
Route::get('/show', function () {
    return view('show');
});
Route::post('/insert', [UserController::class, 'insert'])->name('users.insert');

Route::get('/show', [EditController::class, 'selecindex'])->name('selecindex');
Route::get('/edit/{id}', [EditController::class, 'edit'])->name('users.edit');
Route::post('/update/{id}', [EditController::class, 'update'])->name('users.update');
Route::post('/delete/{id}', [DeleteController::class, 'destroy'])->name('users.destroy');
Route::get('/index', [IndexController::class, 'index']);
