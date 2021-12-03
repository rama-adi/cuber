<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\VerifyEmailController;
use Illuminate\Support\Facades\Route;

Route::prefix('auth')->group(function () {
    Route::get('/daftar', [RegisteredUserController::class, 'create'])
        ->middleware('guest')
        ->name('register');

    Route::post('/daftar', [RegisteredUserController::class, 'store'])
        ->middleware('guest');

    Route::get('/masuk', [AuthenticatedSessionController::class, 'create'])
        ->middleware('guest')
        ->name('login');

    Route::post('/masuk', [AuthenticatedSessionController::class, 'store'])
        ->middleware('guest');

    Route::get('/lupa-password', [PasswordResetLinkController::class, 'create'])
        ->middleware('guest')
        ->name('password.request');

    Route::post('/lupa-password', [PasswordResetLinkController::class, 'store'])
        ->middleware('guest')
        ->name('password.email');

    Route::get('/ganti-password/{token}', [NewPasswordController::class, 'create'])
        ->middleware('guest')
        ->name('password.reset');

    Route::post('/ganti-password', [NewPasswordController::class, 'store'])
        ->middleware('guest')
        ->name('password.update');

    Route::get('/verifikasi-email', [EmailVerificationPromptController::class, '__invoke'])
        ->middleware('auth')
        ->name('verification.notice');

    Route::get('/verifikasi-email/{id}/{hash}', [VerifyEmailController::class, '__invoke'])
        ->middleware(['auth', 'signed', 'throttle:6,1'])
        ->name('verification.verify');

    Route::post('/email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
        ->middleware(['auth', 'throttle:6,1'])
        ->name('verification.send');

    Route::get('/konfirmasi-password', [ConfirmablePasswordController::class, 'show'])
        ->middleware('auth')
        ->name('password.confirm');

    Route::post('/konfirmasi-password', [ConfirmablePasswordController::class, 'store'])
        ->middleware('auth');

    Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
        ->middleware('auth')
        ->name('logout');
});
