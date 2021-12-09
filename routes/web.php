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
Route::view('peraturan-cuber', 'rules')->name('rules');
Route::get('/thread/{id}-{slug}', ThreadViewController::class)->name('thread.show');

Route::get('jasa-konseling', function () {
    return '';
})->name('counseling.index');

Route::get('/kategori/{id}-{name}', function ($id, $slug) {
    return [
        'id' => $id,
        'name' => $slug
    ];
})->name('category.show');
require __DIR__ . '/auth.php';
