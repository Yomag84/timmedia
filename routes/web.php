<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');
Route::get('/contact/success', [ContactController::class, 'success'])->name('contact.success');
