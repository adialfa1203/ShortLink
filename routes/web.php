<?php

use App\Http\Controllers\AuthController;
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
Route::get('/Link', [LinkController::class, 'Link'])->name('Link');

Route::get('register', [AuthController::class, 'register']);
Route::post('registeruser', [AuthController::class, 'registeruser'])->name('registeruser');

Route::get('/Home', function () {
    return view('Landingpage.Home');
});
Route::get('/Shortlink', function () {
    return view('Landingpage.Shortlink');
});
Route::get('/Microsite', function () {
    return view('Landingpage.Microsite');
});
Route::get('/Subscribe', function () {
    return view('Landingpage.Subscribe');
});

