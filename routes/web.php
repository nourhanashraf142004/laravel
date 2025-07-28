<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return 'welcomeee';
});
Route::get('/hello', function () {
    return 'welcome and hello,,,,,';
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
use App\Http\Controllers\NoteController;

Route::resource('notes', NoteController::class);
