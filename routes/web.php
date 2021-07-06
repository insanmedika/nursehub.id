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
Route::get('/search', [App\Http\Controllers\HomeController::class, 'search'])->name('search.index');
Route::post('/search', [App\Http\Controllers\HomeController::class, 'search'])->name('search');
Route::get('/formulir', function () {
    return view('daftar');
});
Route::get('/blog1', function () {
    return view('blog.blog1');
});
Route::get('/tentang-kami', function () {
    return view('tentangkami');
});
Route::get('/blog', function () {
    return view('blog.index');
});
Route::get('/lowongan/{posts}', [App\Http\Controllers\JobController::class, 'lowongan'])->name('lowongan.single');
Route::post('/formulir/submit', [App\Http\Controllers\HomeController::class, 'lowongansubmit'])->name('lowongan.submit');
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard/lowongan/create', function () {
    return view('admin.lowongan.create');
})->name('lowongan.create');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard/lowongan/', [App\Http\Controllers\JobController::class, 'index'])->name('lowongan');
Route::middleware(['auth:sanctum', 'verified'])->post('/dashboard/lowongan/store', [App\Http\Controllers\JobController::class, 'store'])->name('lowongan.store');
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard/lowongan/edit/{id}', [App\Http\Controllers\JobController::class, 'edit'])->name('lowongan.edit');
Route::middleware(['auth:sanctum', 'verified'])->post('/dashboard/lowongan/update', [App\Http\Controllers\JobController::class, 'update'])->name('lowongan.update');
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard/lowongan/destroy/{id}', [App\Http\Controllers\JobController::class, 'destroy'])->name('lowongan.destroy');
