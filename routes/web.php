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
    return view('home');
});

Route::get('/lang/{lang}', [App\Http\Controllers\LanguageController::class, 'switchLang'])->name('lang.switch');
Route::get('home', [App\Http\Controllers\MarbytController::class, 'home'])->name('home');
Route::post('contact', [App\Http\Controllers\MarbytController::class, 'contact'])->name('contact');
Route::get('software', [App\Http\Controllers\MarbytController::class, 'software'])->name('software');
Route::get('projects', [App\Http\Controllers\MarbytController::class, 'projects'])->name('projects');
Route::get('team', [App\Http\Controllers\MarbytController::class, 'team'])->name('team');
Route::get('agrotech', [App\Http\Controllers\MarbytController::class, 'agrotech'])->name('agrotech');
Route::get('health', [App\Http\Controllers\MarbytController::class, 'health'])->name('health');
Route::get('industry', [App\Http\Controllers\MarbytController::class, 'industry'])->name('industry');
Route::get('research', [App\Http\Controllers\MarbytController::class, 'research'])->name('research');
Route::get('spia', [App\Http\Controllers\MarbytController::class, 'spia'])->name('spia');

