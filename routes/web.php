<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardAdminController;
use App\Http\Controllers\LinkAdminController;
use App\Http\Controllers\LinkController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\DataUserController;
use App\Http\Controllers\ShortLinkController;
use App\Http\Controllers\DahsboardController;
use App\Http\Controllers\AnalyticUserController;
use App\Http\Controllers\SubscribeController;
use App\Http\Controllers\MicrositeController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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
//Auth
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
Route::get('/Analitik', [AnalyticUserController::class, 'Analitik'])->name('Analitik');



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
Route::get('/ProfilAdmin', function () {
    return view('Admin.ProfilAdmin');
});

//Send email
Route::get('send-email', [AuthController::class, 'sendEmail']);
Route::get('change-password/{email}', [AuthController::class, 'changePassword'])->name('changePassword');
//change password
Route::post('updatePassword', [AuthController::class, 'updatePassword'])->name('updatePassword');
//sendEmail
Route::get('sample', [AuthController::class, 'sendEmail']);
Route::post('send-emails', [AuthController::class, 'sendSampleEmail'])->name('sendEmail');
Route::get('verification', [AuthController::class, 'verification'])->name('verification');
Route::post('verificationCode', [AuthController::class, 'verificationCode'])->name('verificationCode');

Route::get('/DashboardUser', function () {
    return view('User.DashboardUser');
});


//Middleware User
Route::group(['middleware' => ['role:user']], function () {
//Dashboard
Route::get('dashboard', [DahsboardController::class, 'dashboard']);
//ShortLink
Route::post('short-link', [ShortLinkController::class,'shortLink'])->name('shortLink');
Route::post('short/{link}', [ShortLinkController::class, 'accessShortLink'])->name('access.shortlink');
//Profile
Route::get('/profil-user', [ProfilController::class, 'profile']);
Route::post('update-profil', [ProfilController::class, 'updateProfile'])->name('updateProfile');
//Microsite
Route::get('/microsite-user', [MicrositeController::class, 'micrositeUser'])->name('microsite.user');
//analytic
Route::get('/analytic-user', [AnalyticUserController::class, 'analyticUser'])->name('analytic.user');
//link
Route::get('/Link', [LinkController::class, 'Link'])->name('Link');
Route::get('/archive-link', [ArchiveLinkController::class, 'archiveLink'])->name('archive.link');
//subscribe
Route::get('/subscribe-user', [SubscribeUserController::class, 'subscribeUser'])->name('subscribe.user');
Route::get('/subscribe-product-user', [SubscribeUserController::class, 'subscribeProductUser'])->name('subscribe.product.user');



});

//Middleware Admin
Route::group(['middleware' => ['role:admin']], function () {
//Dashboard Admin
Route::get('/dashboard-admin', [DashboardAdminController::class, 'dashboardAdmin'])->name('dashboard.admin');
Route::get('/Subscribe', [SubscribeController::class, 'Subscribe'])->name('Subscribe');
Route::get('/AddSubscribe', [SubscribeController::class, 'AddSubscribe'])->name('AddSubscribe');
//Data User (Admin)
Route::get('/data-user', [DataUserController::class, 'dataUser'])->name('data.user');

});

Route::get('/tester', function () {
    return view('tester.afterlogin');
});
