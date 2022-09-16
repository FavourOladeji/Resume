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

Route::get('/dashboard', 
})->middleware(['auth'])->name('dashboard');


Route::prefix('resume')->group(function () {
    Route::get('heading', function () {
    return view('resume.heading'))->name('heading');
    Route::get('work-history', function () {
        return view('resume.work-history');
    })->name('work-history');
    Route::get('work-history/tip', function () {
        return view('tips.work-history');
    })->name('work-history.tips');
    Route::get('education', [])->name('education');
    Route::get('skills', [])->name('skills');
    Route::get('summary', [])->name('summary');
    Route::get('finalize', [])->name('finalize');
});

require __DIR__ . '/auth.php';
