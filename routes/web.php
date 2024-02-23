<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('about', function () {
    return view('about');
})->name('about');

Route::get('service', function () {
    return view('services');
})->name('service');

Route::get('room', function () {
    return view('room');

})->name('room');

Route::get('team', function () {
    return view('team');
})->name('team');

Route::get('contact', function () {
    return view('contact');
})->name('contact');

Route::get('booking', function () {
    return view('booking');
})->name('booking');




