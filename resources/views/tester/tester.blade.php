<?
//Middleware Admin
Route::group(['middleware' => ['role:admin']], function () {
//Dashboard Admin
Route::get('/dashboard-admin', [DashboardAdminController::class, 'dashboardAdmin'])->name('dashboard.admin');
//Data User (Admin)
Route::get('/data-user', [DataUserController::class, 'dataUser'])->name('data.user');
// Profil Admin
Route::get('/profil-admin', [ProfilController::class, 'profile']);
Route::post('/update-admin', [ProfilController::class, 'updateAdmin'])->name('update.admin');
});