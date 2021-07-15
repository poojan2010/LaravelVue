<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\signupController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/products',[ProductController::class,'show']);

Route::get('/productdetails/{id}',[ProductController::class,'productdetails']);

Route::get('/product',[ProductController::class,'productshow']);


Route::post('/signup',[signupController::class,'store']);
Route::post('/login',[signupController::class,'index']);

Route::post('/logout',[signupController::class,'logout']);


/*Route::get('/home', function () {
    return view('welcome');
});*/



