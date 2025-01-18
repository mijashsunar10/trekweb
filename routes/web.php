<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TrekController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('index');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



Route::get('/header', [TrekController::class, 'header'])->name('header');

Route::get('/trek1', [TrekController::class, 'trek1'])->name('trek1');
Route::get('/trekinfo', [TrekController::class, 'trekinfo'])->name('trekinfo');
Route::get('/contact', [TrekController::class, 'contact'])->name('contact');
Route::get('/faq', [TrekController::class, 'faq'])->name('faq');
Route::get('testimonials', [TrekController::class, 'testimonials'])->name('testimonials');
Route::get('/main', [TrekController::class, 'main'])->name('main');
Route::get('/customize', [TrekController::class, 'customize'])->name('customize');
Route::get('/mountainpeak', [TrekController::class, 'mountainpeak'])->name('mountainpeak');
Route::get('/blog', [TrekController::class, 'blog'])->name('blog');
Route::get('/news', [TrekController::class, 'news'])->name('news');
Route::get('/headernew', [TrekController::class, 'headernew'])->name('headernew');



require __DIR__.'/auth.php';
