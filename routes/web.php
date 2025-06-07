<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\FaqController;

Route::get('/jelajah_laut', [FeedbackController::class, 'create']);
Route::post('/jelajah_laut', [FeedbackController::class, 'store']);
Route::get('/maps', function () {
    return view('maps'); // Nama file `maps.blade.php` (tanpa .blade.php)
});
Route::get('/jelajah_laut', [MainController::class, 'jelajahLaut']);
Route::get('/jelajah_laut', [FaqController::class, 'index']);
