<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Practice 1
// Number 1
Route::get('/', function () {
    echo "Hi! Welcome to Laravel";
    });

//Number 2
Route::get('/about', function () {
    echo "NIM : 204172054 <br>";
    echo "Name : Rabiatul Fitra Aulia <br>";
    echo "Class : TI-2I";
    });

//Number 3
Route::get('/article/{id}', function ($id) {
    echo "This is Article Pages with ID : ".$id;
    });

