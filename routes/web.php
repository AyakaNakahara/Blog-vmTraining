<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/blog/{id}', [App\Http\Controllers\HomeController::class, 'blog'])->name('blog');
Route::get('/blog/edit/{id}', [App\Http\Controllers\HomeController::class, 'edit'])->name('edit');
Route::post('/edit/{id}', [App\Http\Controllers\HomeController::class, 'editAction'])->name('editAction');
Route::post('/delete/{id}', [App\Http\Controllers\HomeController::class, 'delete'])->name('delete');