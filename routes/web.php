<?php

use App\Http\Controllers\MessagesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccountController;

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
    if ($user = AccountController::getCookie()){
        return view('index', compact('user'));
    } else {
        return view('index');
    }
});

Route::get('/register', function (){
    if ($user = AccountController::getCookie()){
        return redirect()->route('profile')->with(compact('user'));
    } else {
        return view('register');
    }
});

Route::get('/login', function (){
    if ($user = AccountController::getCookie()){
        return redirect()->route('profile')->with(compact('user'));
    } else {
        return view('login');
    }
})->name('login');

Route::get('/profile', function (){
    if (!empty($user = AccountController::checkAuth(AccountController::getCookie()))){
//        dd($user);
        return view('profile.index', compact('user'));
    } else {
        return redirect()->route('login');
    }
})->name('profile');

Route::post('/profile', [AccountController::class, 'updateData'])->name('updateData');

Route::post('/register', [AccountController::class, 'register'])->name('register');
Route::post('/login', [AccountController::class, 'login'])->name('login');

Route::get('/profile/messages', [MessagesController::class, 'index'])->name('messages');
Route::get('/profile/messages/{id}', [MessagesController::class, 'write'])->name('write');

Route::get('/profile/messages/{id}/get', [MessagesController::class, 'sendGet'])->name('sendGet');
Route::post('/profile/messages/{id}', [MessagesController::class, 'send'])->name('send');

Route::get('/logout', function (){
    AccountController::delCookie();
    return redirect('/');
});

// FOR DEBUG
Route::get('/set-cookie', [AccountController::class, 'setCookie'])->name('set-cookie');
Route::get('/get-cookie', [AccountController::class, 'getCookie'])->name('get-cookie');
Route::get('/del-cookie', [AccountController::class, 'delCookie'])->name('del-cookie');
