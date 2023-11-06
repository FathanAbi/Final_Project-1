<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\FormController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function(){
    return view('loginAccount');
});

Route::get('/register', function(){
    return view('registAccount');
}); 

Route::get('/detail', function(){
    return view('detailAccount');
});

Route::post('/db-form', [FormController::class, 'store']);
Route::post('/db-auth', [LoginController::class, 'authenticate']);

Route::get('/allForm', [FormController::class, 'index']);

Route::get('/cache', [FormController::class, 'getCache']);