<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardAdminController;
use App\Http\Controllers\LinkAdminController;
use App\Http\Controllers\LinkController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\DataUserController;
use App\Http\Controllers\ShortLinkController;
use App\Http\Controllers\DahsboardController;
use App\Http\Controllers\ArchiveLinkController;
use App\Http\Controllers\AnalyticUserController;
use App\Http\Controllers\SubscribeUserController;
use App\Http\Controllers\MicrositeController;
use App\Http\Controllers\ButtonController;
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
Route::middleware(['guest'])->group(function () {
Route::get('/login',[AuthController::class,'login'])->name('login');
Route::get('/login-user',[AuthController::class,'loginUser'])->name('login.user');
Route::get('/Link', [LinkController::class, 'Link'])->name('Link');
Route::get('/register', [AuthController::class, 'register']);
Route::post('/register-user', [AuthController::class, 'registerUser'])->name('register.user');
});

Route::middleware(['auth'])->group(function () {
Route::get('/logout',[AuthController::class,'logout'])->name('logout');
});


Route::get('/monyett', function () {
    return view('welcome');
});

Route::get('/DashboardAdmin', [DashboardAdminController::class, 'DashboardAdmin'])->name('DashboardAdmin');
Route::get('/Link', [LinkController::class, 'Link'])->name('Link');
Route::get('/Analitik', [AnalyticUserController::class, 'Analitik'])->name('Analitik');
//HelpSupport
Route::get('HelpSupport', [DahsboardController::class, 'HelpSupport']);
Route::get('Start', [DahsboardController::class, 'Start']);
Route::get('Announcement', [DahsboardController::class, 'Announcement']);
Route::get('Account', [DahsboardController::class, 'Account']);
Route::get('BillingSubscriptions', [DahsboardController::class, 'BillingSubscriptions']);
Route::get('PlatformMicrosite', [DahsboardController::class, 'PlatformMicrosite']);
Route::get('ShortLink', [DahsboardController::class, 'ShortLink']);


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
Route::group(['middleware' => ['checkBanStatus', 'role:user']], function () {
//Dashboard
Route::get('/dashboard-user', [DahsboardController::class, 'dashboardUser'])->name('dashboard.user');
//ShortLink
Route::post('short-link', [ShortLinkController::class,'shortLink'])->name('shortLink');
//AccessLink
Route::post('short/{link}', [ShortLinkController::class, 'accessShortLink'])->name('access.shortlink');
//ActiveLink
Route::get('/Link', [LinkController::class, 'Link'])->name('Link');
Route::post('active-link', [LinkController::class,'activeLink'])->name('active.link');
Route::get('/archive/{id}', [LinkController::class, 'archive'])->name('archive');
//ArchiveLink
Route::post('archive-link', [LinkController::class,'archiveLink'])->name('archive.link');
Route::get('/archive-link-user', [ArchiveLinkController::class, 'archiveLinkUser'])->name('archive.link.user');
Route::get('/restore/{id}', [ArchiveLinkController::class, 'restore'])->name('restore');
//Profile
Route::get('/profil-user', [ProfilController::class, 'profile']);
Route::post('update-profil', [ProfilController::class, 'updateProfile'])->name('updateProfile');
//analytic
Route::get('/analytic-user', [AnalyticUserController::class, 'analyticUser'])->name('analytic.user');
//subscribe
Route::get('/subscribe-user', [SubscribeUserController::class, 'subscribeUser'])->name('subscribe.user');
Route::get('/subscribe-product-user', [SubscribeUserController::class, 'subscribeProductUser'])->name('subscribe.product.user');
// microsite
Route::post('/create-microsite', [MicrositeController::class, 'createMicrosite'])->name('create.microsite');
Route::get('/edit-microsite/{id}', [MicrositeController::class, 'editMicrosite'])->name('edit.microsite');
Route::get('/update-microsite/{id}', [MicrositeController::class, 'updateMicrosite'])->name('update.microsite');
Route::get('/microsite-user', [MicrositeController::class, 'microsite'])->name('microsite');
Route::get('/add-microsite', [MicrositeController::class, 'addMicrosite'])->name('add.microsite');
});

//Middleware Admin
Route::group(['middleware' => ['role:admin']], function () {
//Dashboard Admin
Route::get('/dashboard-admin', [DashboardAdminController::class, 'dashboardAdmin'])->name('dashboard.admin');
//Data User (Admin)
Route::get('/data-user', [DataUserController::class, 'dataUser'])->name('data.user');
Route::get('admin/user/{userId}/ban', [DataUserController::class, 'banUser'])->name('user.ban');
Route::get('admin/user/{userId}/unban', [DataUserController::class, 'unbanUser'])->name('user.unban');
// microsite Admin
Route::get('/create-component', [MicrositeController::class, 'createComponent'])->name('create.component');
Route::post('/save-component', [MicrositeController::class, 'saveComponent'])->name('save.component');
Route::post('/update-component/{id}', [MicrositeController::class, 'updateComponent'])->name('update.component');
Route::get('/edit-component/{id}', [MicrositeController::class, 'editComponent'])->name('edit.component');
Route::get('/delete-component/{id}', [MicrositeController::class, 'deleteComponent'])->name('delete.component');
Route::get('/view-component', [MicrositeController::class, 'viewComponent'])->name('view.component');
// button
Route::get('/view-button', [ButtonController::class, 'viewButton'])->name('view.button');
Route::get('/create-button', [ButtonController::class, 'createButton'])->name('create.button');
});

Route::get('/tester', function () {
    return view('tester.afterlogin');
});
