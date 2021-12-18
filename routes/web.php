<?php

use App\Http\Controllers\ThreadShortlinkRedirectController;
use App\Http\Controllers\ThreadViewController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
})->name('homepage');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

});


Route::get('/tid/{id}', ThreadShortlinkRedirectController::class)->name('shareThread');
Route::get('/thread/{id}-{slug}', ThreadViewController::class)->middleware(\App\Http\Middleware\SecuredViaCaptcha::class)->name('thread.show');

Route::view('peraturan-cuber', 'rules')->name('rules');
Route::view('/produk-sponsor', 'sponsored-product')->name('sponsored-product');
Route::get('jasa-konseling', function () {
    return '';
})->name('counseling.index');

Route::get('captcha-block', [\App\Http\Controllers\CaptchaVerifyController::class, 'show'])->name('captchablock.show');
Route::post('captcha-block', [\App\Http\Controllers\CaptchaVerifyController::class, 'validateCaptcha'])->name('captchablock.validate');
Route::get('/kategori/{id}-{name}', function (\App\Models\ThreadCategory $id, $slug) {
    return view('category-show')->with(['category' => $id]);
})->name('category.show');
Route::view('/kategori', 'category-index')->name('category.index');
require __DIR__ . '/auth.php';
