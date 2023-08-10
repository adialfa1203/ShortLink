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
Route::get('/login',[AuthController::class,'login'])->name('login');
Route::get('/loginuser',[AuthController::class,'loginuser'])->name('loginuser');
Route::get('/', function () {
    return view('welcome');
});

require __DIR__."/adi.php";
require __DIR__."/gmbs.php";
Route::get('/register', function () {
    return view('login-register.register');
});

require __DIR__."/adi.php";
require __DIR__."/felix.php";

