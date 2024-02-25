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

// .................dashboard routes..................

Route::get('dashboard',function(){
    return view('admin.dashboard');
})->name('dashboard');

Route::get('services',function(){
    return view('admin\services');
})->name('services');

Route::get('add_services',function(){
    return view('admin\add_service');
})->name('add_services');

Route::get('members',function(){
    return view('admin\members');
})->name('members');

Route::get('add-member',function(){
    return view('admin\add-member');
})->name('add-member');



