<?php

use App\Http\Controllers\EssayController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ShortLinkController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\UserDataController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('main');
})->middleware('auth');

//register
Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);

//login
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

//Kelengkapan Data
Route::resource('/complete-data', UserDataController::class);

//upload file latihan
Route::get('/upload', [UploadController::class, 'upload']);
Route::post('/upload', [UploadController::class, 'store']);
// Route::post('/upload', [EssayController::class, 'upload_essay']);
// Route::post('/upload', [UploadController::class, 'upload_bukti_ss']);
// Route::post('/upload', [UploadController::class, 'upload_mbti']);

//success page
Route::get('/success', function () {
    return view('success');
});

//latihan bikin web app pengumpulan essay
Route::get('/essay', [EssayController::class, 'index']);
Route::post('/essay', [EssayController::class, 'store'])->name('post-essay');

//shortlink bgst
Route::resource('/shortlink', ShortLinkController::class);
Route::get('/{shortLink:short}', [ShortLinkController::class, 'show']);
