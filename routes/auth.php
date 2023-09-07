<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AdminController;
use App\Http\Controllers\Auth\PasswordController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\VerifyEmailController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\RegisteredAdminController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;

//#################################### Admin routes ############################################
Route::middleware('guest')->group(function () {
    Route::get('/admin/register', [RegisteredAdminController::class, 'create'])
                ->name('admin.register');

    Route::post('/admin/register', [RegisteredAdminController::class, 'store'])
    ->name('admin.register.store');
    
    Route::get('/admin/login', [AdminController::class, 'create'])
    ->name('admin.login');
    
    Route::post('/admin/login', [AdminController::class, 'store'])
    ->name('admin.login.store');
    
});
Route::post('/admin/logout', [AdminController::class, 'destroy'])
->name('admin.logout')->middleware("auth:admin");

//#################################### User routes ############################################

Route::middleware('guest')->group(function () {
    Route::get('/register', [RegisteredUserController::class, 'create'])
                ->name('user.register');

    Route::post('/register', [RegisteredUserController::class, 'store'])
    ->name('user.register.store');

    Route::get('/login', [AuthenticatedSessionController::class, 'create'])
                ->name('user.login');

    Route::post('/login', [AuthenticatedSessionController::class, 'store'])
    ->name('user.login.store');

    Route::get('forgot-password', [PasswordResetLinkController::class, 'create'])
                ->name('password.request');

    Route::post('forgot-password', [PasswordResetLinkController::class, 'store'])
                ->name('password.email');

    Route::get('reset-password/{token}', [NewPasswordController::class, 'create'])
                ->name('password.reset');

    Route::post('reset-password', [NewPasswordController::class, 'store'])
                ->name('password.store');
});

Route::middleware('auth')->group(function () {
    Route::get('verify-email', EmailVerificationPromptController::class)
                ->name('verification.notice');

    Route::get('verify-email/{id}/{hash}', VerifyEmailController::class)
                ->middleware(['signed', 'throttle:6,1'])
                ->name('verification.verify');

    Route::post('email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
                ->middleware('throttle:6,1')
                ->name('verification.send');

    Route::get('confirm-password', [ConfirmablePasswordController::class, 'show'])
                ->name('password.confirm');

    Route::post('confirm-password', [ConfirmablePasswordController::class, 'store']);

    Route::put('password', [PasswordController::class, 'update'])->name('password.update');

    Route::post('/dashboard/logout', [AuthenticatedSessionController::class, 'destroy'])
                ->name('user.logout');
});