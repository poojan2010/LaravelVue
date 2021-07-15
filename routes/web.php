<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\signupController;
use App\Http\Controllers\productController;


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

Route::get('/navsidefoot', function () {
    return view('navsidefoot');
});

Auth::routes();

//Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/logout',[signupController::class,'logout']);



