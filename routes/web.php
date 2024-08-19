<?php

use App\Http\Controllers\MemberController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoomtypeController;




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


Route::get('service',[ServiceController::class, 'showservice'])->name('service');

Route::get('room', function () {
    return view('room');

})->name('room');

Route::get('team',[MemberController::class, 'show_team'])->name('team');

Route::get('contact', function () {
    return view('contact');
})->name('contact');

Route::get('booking', function () {
    return view('booking');
})->name('booking');

// .................dashboard routes..................

Route::middleware('auth')->group(function(){

    Route::get('dashboard',function(){
        return view('admin.dashboard');
    })->name('dashboard');

    Route::resource('services', ServiceController::class);
    Route::resource('members', MemberController::class);
    Route::resource('roomtype', RoomtypeController::class);


});




// .....................login routes..................



Route::get('admin',function(){
    return view('auth\login');
})->name('admin');

Route::post('login',[UserController::class,'login'])->name('login');
Route::get('logout',[UserController::class,'logout'])->name('logout');



