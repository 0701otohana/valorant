<?php

use App\Http\Controllers\Admin\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Admin\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Admin\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Admin\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Admin\Auth\NewPasswordController;
use App\Http\Controllers\Admin\Auth\PasswordResetLinkController;
use App\Http\Controllers\Admin\Auth\RegisteredUserController;
use App\Http\Controllers\Admin\Auth\VerifyEmailController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\AdminAuth;
use App\Http\Controllers\User\Auth\ValorantController;
use App\Http\Controllers\Admin\AdminController;

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

//localhost/admin/Adminlogin
Route::get('/Adminlogin', function () {
    return view('Auth.Adminlogin');
})->name('Auth.Adminlogin');

Route::get('/Adminlogin', [AuthenticatedSessionController::class, 'create'])
                ->middleware('guest')
                ->name('Adminlogin');

Route::post('/admin.login', [AuthenticatedSessionController::class, 'store'])
                ->middleware('guest')
                ->name('admin.login');

Route::get('/Adminmain', [AdminController::class, 'Adminmain'])
                ->middleware('auth:admins');

Route::get('/complete', [ValorantController::class, 'complete'])
                ->name('user.complete');

Route::post('/complete', [ValorantController::class, 'complete'])
                ->name('complete');

Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
                ->middleware('auth:admins')
                ->name('logout');

Route::get('/edit/{id}', [AdminController::class, 'edit'])->name('EntryteamEdit');

Route::post('/delete/{id}', [AdminController::class, 'delete'])->name('EntryteamDelete');

Route::post('/update/{id}', [AdminController::class, 'update'])->name('EntryteamUpdate');