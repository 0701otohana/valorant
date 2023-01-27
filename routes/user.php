<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\DashboardController;
use App\Http\Controllers\User\Auth\AuthenticatedSessionController;
use App\Http\Controllers\User\Auth\ConfirmablePasswordController;
use App\Http\Controllers\User\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\User\Auth\EmailVerificationPromptController;
use App\Http\Controllers\User\Auth\NewPasswordController;
use App\Http\Controllers\User\Auth\PasswordResetLinkController;
use App\Http\Controllers\User\Auth\RegisteredUserController;
use App\Http\Controllers\User\Auth\VerifyEmailController;
use App\Http\Controllers\User\Auth\ValorantController;
use App\Http\Controllers\EntryteamController;
use App\Notifications\CustomResetPassWordNotification;
use App\Http\Controllers\User\Auth\LoginController;
use App\Http\Controllers\User\Auth\RegisterController;
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

Route::get('/', function () {
    return view('Auth.main');
})->name('Auth.main');

Route::get('/main', function () {
    return view('Auth.main');
})->name('Auth.main');

Route::post('/main', function () {
    return view('Auth.main');
})->name('Auth.main');

Route::get('/signup/{email}', [RegisteredUserController::class, 'create'])
    ->middleware('guest')
    ->name('signup');

Route::get('/signup', [RegisteredUserController::class, 'create'])
    ->middleware('guest')
    ->name('signup');

Route::post('/register', [RegisteredUserController::class, 'store'])
    ->middleware('guest');

Route::get('/login', [AuthenticatedSessionController::class, 'create'])
    ->middleware('guest')
    ->name('login');

Route::post('/login', [AuthenticatedSessionController::class, 'store'])
    ->middleware('guest');

Route::get('/EntryForm', [ValorantController::class, 'EntryForm'])
    ->middleware('auth');

Route::post('/Entrycheck', [EntryteamController::class, 'Entrycheck'])
    ->middleware('auth');

Route::get('/complete', [ValorantController::class, 'complete'])
    ->name('user.complete');

Route::post('/complete', [ValorantController::class, 'complete'])
    ->name('complete');

Route::get('/forgot-password', [PasswordResetLinkController::class, 'create'])
    ->middleware('guest')
    ->name('password.request');

Route::post('reset-password', [NewPasswordController::class, 'store'])
    ->name('password.update');

Route::post('/forgot-password', [PasswordResetLinkController::class, 'store'])
    ->middleware('guest')
    ->name('/forgot-password');

Route::get('reset-password/{token}', [NewPasswordController::class, 'create'])
    ->middleware('guest')   
    ->name('password.reset');

Route::post('/reset-password', [NewPasswordController::class, 'store'])
    ->middleware('guest')
    ->name('password.update');

Route::get('/verify-email', [EmailVerificationPromptController::class, '__invoke'])
    ->middleware('auth')
    ->name('verification.notice');

Route::get('/verify-email/{id}/{hash}', [VerifyEmailController::class, '__invoke'])
    ->middleware(['auth', 'signed', 'throttle:6,1'])
    ->name('verification.verify');

Route::post('/email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
    ->middleware(['auth', 'throttle:6,1'])
    ->name('verification.send');

Route::get('/confirm-password', [ConfirmablePasswordController::class, 'show'])
    ->middleware('auth')
    ->name('password.confirm');

Route::post('/confirm-password', [ConfirmablePasswordController::class, 'store'])
    ->middleware('auth');

Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
    ->middleware('auth:users')
    ->name('logout');

Route::get('login/google', [LoginController::class, 'redirectToGoogle']);

Route::get('login/google/callback', [LoginController::class, 'handleGoogleCallback']);