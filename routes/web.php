<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactsController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contacts', function () {
    return view('contacts');
})->name('contacts');

Route::post('/contacts/submit', [ContactsController::class, 'submit'])->name('contacts-form');
