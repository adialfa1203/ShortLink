<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardAdminController;
use App\Http\Controllers\LinkAdminController;
use App\Http\Controllers\LinkController;
use App\Http\Controllers\ProfilController;
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
Route::get('register', [AuthController::class, 'register']);
Route::post('registeruser', [AuthController::class, 'registeruser'])->name('registeruser');
Route::get('/logout',[AuthController::class,'logout'])->name('logout');

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/LinkAdmin', [LinkAdminController::class, 'LinkAdmin'])->name('LinkAdmin');
Route::get('/DashboardAdmin', [DashboardAdminController::class, 'DashboardAdmin'])->name('DashboardAdmin');
Route::get('/Link', [LinkController::class, 'Link'])->name('Link');


Route::get('/', function () {
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

//Send email
Route::get('sendemail', [AuthController::class, 'sendEmail']);
Route::get('changepassword/{email}', [AuthController::class, 'changePassword'])->name('changePassword');
//change password
Route::post('updatePassword', [AuthController::class, 'updatePassword'])->name('updatePassword');

//sendEmail
Route::get('sample', [AuthController::class, 'sendEmail']);
Route::post('sendEmail', [AuthController::class, 'sendSampleEmail'])->name('sendEmail');
Route::get('verification', [AuthController::class, 'verification'])->name('verification');
Route::post('verificationCode', [AuthController::class, 'verificationCode'])->name('verificationCode');

Route::get('/DashboardUser', function () {
    return view('User.DashboardUser');
});

//Middleware User
Route::group(['middleware' => ['role:user']], function () {
Route::get('profiluser', [ProfilController::class, 'profile']);
Route::post('updateprofil', [ProfilController::class, 'updateProfile'])->name('updateProfile');

});

//Middleware Admin
Route::group(['middleware' => ['role:admin']], function () {
    Route::get('/tester', function () {
        return view('tester.afterlogin');
    });
});

