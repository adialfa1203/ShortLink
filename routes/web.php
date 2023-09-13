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
use App\Http\Controllers\SubscribeController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\SubscribeUserController;
use App\Http\Controllers\MicrositeController;
use App\Http\Controllers\ButtonController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\LandingPageController;
use Illuminate\Support\Facades\Route;
// use SimpleSoftwareIO\QrCode\Facades\QrCode;
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
Route::get('/', [DahsboardController::class, 'home']);
});

Route::get('/', [LandingPageController::class, 'landingPage'])->name('landing.page');
Route::get('/Shortlink', [LandingPageController::class, 'shortLink'])->name('short.link');
Route::get('/Microsite', [LandingPageController::class, 'micrositePage'])->name('microsite.page');
Route::get('/Subscribe', [LandingPageController::class, 'subscribePage'])->name('subscribe.page');
Route::get('/Privacy', [LandingPageController::class, 'privacyPage'])->name('privacy.page');
Route::get('/footer-landingpage', [LandingPageController::class, 'footerPage'])->name('footer.page');

Route::get('Start', [DahsboardController::class, 'Start']);
Route::get('Announcement', [DahsboardController::class, 'Announcement']);
Route::get('Account', [DahsboardController::class, 'Account']);
Route::get('BillingSubscriptions', [DahsboardController::class, 'BillingSubscriptions']);
Route::get('PlatformMicrosite', [DahsboardController::class, 'PlatformMicrosite']);
Route::get('ShortLink', [DahsboardController::class, 'ShortLink']);
Route::get('HelpSupport', [DahsboardController::class, 'HelpSupport']);
Route::post('/create/{id}', [CommentController::class, 'create'])->name('create');
// Route::get('/qr', function()
// {
// 	return QrCode::size(250)
// 	->backgroundColor(255, 255, 204)
// 	->generate('BELAJAR QR');
// });

Route::middleware(['auth'])->group(function () {
Route::get('/logout',[AuthController::class,'logout'])->name('logout');
// Route::get('HelpSupport', [DahsboardController::class, 'HelpSupport']);
});

//Middleware User
Route::group(['middleware' => ['checkBanStatus', 'role:user']], function () {
//search
Route::get('/search', [SearchController::class, 'search'])->name('search');

//Dashboard
Route::get('/dashboard-user', [DahsboardController::class, 'dashboardUser'])->name('dashboard.user');
//ShortLink
Route::post('short-link', [ShortLinkController::class,'shortLink'])->name('shortLink');
Route::post('qr', [ShortLinkController::class,'qr'])->name('qr');

//AccessLink
Route::post('short/{link}', [ShortLinkController::class, 'accessShortLink'])->name('access.shortlink');
// Route::post('/microsite/{micrositeLink}', [ShortLinkController::class, 'micrositeLink'])->name('microsite.link');
//ActiveLink
// Route::get('/link-chart', [LinkController::class, 'LinkUsersChart'])->name('link.users.chart');
Route::get('/link-chart', [LinkController::class, 'LinkUsersChart'])->name('link.users.chart');
Route::get('/link/{shortCode}', [LinkController::class, 'showLink'])->name('link.show');
Route::post('active-link', [LinkController::class,'activeLink'])->name('active.link');
Route::get('/archive/{id}', [LinkController::class, 'archive'])->name('archive');
//ArchiveLink
Route::post('archive-link', [LinkController::class,'archiveLink'])->name('archive.link');
Route::get('/archive-link-user', [ArchiveLinkController::class, 'archiveLinkUser'])->name('archive.link.user');
Route::get('/restore/{id}', [ArchiveLinkController::class, 'restore'])->name('restore');
//Profile
Route::get('/profil-user', [ProfilController::class, 'profile'])->name('profile');
//analytic
Route::get('/analytic-user', [AnalyticUserController::class, 'analyticUser'])->name('analytic.user');
Route::get('/analytic-chart', [AnalyticUserController::class, 'AnalyticUsersChart'])->name('analytic.users.chart');

//subscribe
Route::get('/subscribe-user', [SubscribeUserController::class, 'subscribeUser'])->name('subscribe.user');
Route::get('/subscribe-product-user', [SubscribeUserController::class, 'subscribeProductUser'])->name('subscribe.product.user');
// microsite
Route::get('/microsite-user', [MicrositeController::class, 'microsite'])->name('microsite');
Route::post('/create-microsite', [MicrositeController::class, 'createMicrosite'])->name('create.microsite');
Route::get('/edit-microsite/{id}', [MicrositeController::class, 'editMicrosite'])->name('edit.microsite');
Route::post('/update-microsite/{id}', [MicrositeController::class, 'micrositeUpdate'])->name('update.microsite');
Route::get('/add-microsite', [MicrositeController::class, 'addMicrosite'])->name('add.microsite');
Route::post('/url-microsite', [MicrositeController::class, 'urlMicrosite'])->name('url.microsite');
//update key
Route::post('/update-short-link/{shortCode}', [ShortLinkController::class, 'updateShortLink'])->name('update.shortlink');
//update tenggat
Route::post('/update-deactivated/{keyTime}',[LinkController::class, 'updateDeactivated']);

});
Route::get('/microsite-link', [MicrositeController::class, 'micrositeLink'])->name('microsite.short.link');

Route::post('update-profil', [ProfilController::class, 'updateProfile'])->name('updateProfile');
Route::post('/updateAdmin', [ProfilController::class, 'updateAdmin'])->name('updateAdmin');
//Middleware Admin
Route::group(['middleware' => ['role:admin']], function () {
//Dashboard Admin
Route::get('/dashboard-chart', [DashboardAdminController::class, 'dashboardChart'])->name('dashboard.chart');
Route::get('/dashboard-admin', [DashboardAdminController::class, 'dashboardAdmin'])->name('dashboard.admin');
//Data User (Admin)
Route::get('/data-user', [DataUserController::class, 'dataUser'])->name('data.user');
Route::get('/selected-banned', [DataUserController::class, 'banned'])->name('data.banned');
Route::get('admin/user/{userId}/ban', [DataUserController::class, 'banUser'])->name('user.ban');
Route::get('admin/user/{userId}/unban', [DataUserController::class, 'unbanUser'])->name('user.unban');
//Link Admin
Route::get('link-admin', [LinkAdminController::class, 'linkAdmin'])->name('linkAdmin');
// microsite Admin
Route::get('/profil-admin', [ProfilController::class, 'profile'])->name('profile');
Route::get('admin/user/{userId}/unban', [DataUserController::class, 'unbanUser'])->name('user.unban');

Route::get('/create-component', [MicrositeController::class, 'createComponent'])->name('create.component');
Route::post('/save-component', [MicrositeController::class, 'saveComponent'])->name('save.component');
Route::post('/update-component/{id}', [MicrositeController::class, 'updateComponent'])->name('update.component');
Route::get('/edit-component/{id}', [MicrositeController::class, 'editComponent'])->name('edit.component');
Route::get('/delete-component/{id}', [MicrositeController::class, 'deleteComponent'])->name('delete.component');
Route::get('/view-component', [MicrositeController::class, 'viewComponent'])->name('view.component');
//Subscribe
Route::get('/subscribe-admin', [SubscribeController::class, 'subscribe'])->name ('subscribe');
Route::get('add-subscribe', [SubscribeController::class, 'addSubscribe'])->name ('addSubscribe');
// button
Route::get('/create-button', [ButtonController::class, 'createButton'])->name('create.button');
Route::post('/save-button', [ButtonController::class, 'saveButton'])->name('save.button');
Route::post('/update-button/{id}', [ButtonController::class, 'updateButton'])->name('update.button');
Route::get('/edit-button/{id}', [ButtonController::class, 'editButton'])->name('edit.button');
Route::get('/delete-button/{id}', [ButtonController::class, 'deleteButton'])->name('delete.button');
Route::get('/view-button', [ButtonController::class, 'viewButton'])->name('view.button');

Route::get('view-footer', [DashboardAdminController::class, 'viewFooter'])->name('view.footer');
Route::put('edit-footer', [DashboardAdminController::class, 'editFooter'])->name('edit.footer');

//profile
Route::get('/profil-admin', [ProfilController::class, 'profileAdmin'])->name('profileAdmin');
//Komentar
Route::get('/view-komentar', [CommentController::class, 'viewkomentar'])->name('viewkomentar');

//Banned
Route::get('/blokir', [CommentController::class, 'blokir'])->name('blokir');

});
Route::get('/ngetes', function () {
    return view('welcome');
});
