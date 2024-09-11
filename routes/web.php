<?php

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


Route::get('/', [\App\Http\Controllers\BaseController::class, 'index'])->name('index');
Route::get('/video/{id}', [\App\Http\Controllers\BaseController::class, 'video']);
Route::get('/search', [\App\Http\Controllers\BaseController::class, 'search']);
Route::get('/category/{id}', [\App\Http\Controllers\BaseController::class, 'category']);
Route::get('/contact', function () {
    return view('pages.contact');
});
Route::get('/feedback', function () {
    return view('pages.feedback');
});

Route::get('/premium', function () {
    return view('pages.premium');
});
Route::get('/faq', function () {
    return view('pages.faq');
});
