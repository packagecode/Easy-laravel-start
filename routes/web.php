<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;


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

//Route::get('/', function () {
//    return view('welcome');
//});

//Route::get('/', 'PublicController@index');

// GET, POST, PUT, PATCH, DELETE, OPTIONS, HEAD

//Route::get('/about', function () {
//    return view('public.about');
//});
//Route::get('/contact', function () {
//    return view('public.contact');
//});

Route::get('/', [PublicController::class, 'index'])->name('home');
Route::get('/about', [PublicController::class, 'about'])->name('about');
Route::get('/contact', [PublicController::class, 'contact'])->name('contact');

