<?php

use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return view('welcome');
});

Route::controller(App\Http\Controllers\ProfileController::class)->group(function(){
    Route::get('/', 'index')->name('index');
    Route::get('/gallery', 'gallery')->name('gallery');
    Route::get('/ekstrakurikuler', 'class')->name('class');
    Route::get('/artikel', 'news')->name('news');
    Route::get('/artikel/{id}', 'newsShow')->name('newsShow');
    Route::get('/kegiatan', 'activity')->name('activity');

});

Route::get('/about', function () {
    return view('about');
})->name('about');
