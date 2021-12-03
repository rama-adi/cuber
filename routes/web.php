<?php

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
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/thread/{id}-{slug}', function ($id, $slug){
   return [
       'id' => $id,
       'slug' => $slug
   ];
})->name('thread.show');

Route::get('/kategori/{id}-{name}', function ($id, $slug){
    return [
        'id' => $id,
        'name' => $slug
    ];
})->name('category.show');
require __DIR__.'/auth.php';
