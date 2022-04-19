<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Auth;

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

Auth::routes();

// Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', function () {
    return view('index');
});

// Route::get('/about', function () {
//     return view('about');
// });

Route::get('/about', [PostController::class, 'index']);

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/home', [HomeController::class, 'index']);

Route::resource('articles', ArticleController::class);

Route::get('/article/print_pdf',[ArticleController::class, 'print_pdf'])->name('print_pdf');