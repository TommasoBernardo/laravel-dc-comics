<?php

use App\Http\Controllers\Guest\ComicsController;
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
    return view('home');
})->name('home');

Route::get('/comics', [ComicsController::class, 'index'])->name('comics.index');
Route::get('/comics/create', [ComicsController::class, 'create'])->name('comics.create');
Route::post('/comics/store', [ComicsController::class, 'store'])->name('comics.store');
Route::get('/comic/edit', [ComicsController::class, 'edit'])->name('comics.edit');
Route::put('/comic', [ComicsController::class, 'update'])->name('comics.update');
Route::get('/comics/{id}', [ComicsController::class, 'show'])->name('comics.show');
