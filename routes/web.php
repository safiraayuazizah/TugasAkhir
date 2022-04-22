<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisController;

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
Route::get('/cart', function () {
    return view('cart.index');
});
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::resource('/home', HomeController::class);
Route::get('/regis', [RegisController::class, 'index'])->middleware('guest');
